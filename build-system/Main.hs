import Data.List
import Development.Shake
import System.Environment ( getArgs )

mainCssFile = "style.css"
defaultTargets = [mainCssFile]
packageLockfile = "pnpm-lock.yaml"
packageJson = "package.json"

main = do
  args <- getArgs
  let targets =
        if null args then defaultTargets else args
  shake shakeOptions $ do

    action $ do
      need targets
      runAfter (showNotification targets)

    mainCssFile %> \output -> do
      templateFiles <- getDirectoryFiles "" ["**/*.php"]
      cssFiles <- getDirectoryFiles "" ["source/**/*.css"]
      let configFiles = ["postcss.config.js", "tailwind.config.js", packageLockfile]
          extraFiles = ["source/extra-classes.txt"]
      need $ templateFiles <> cssFiles <> configFiles <> extraFiles
      cmd_ (AddEnv "TAILWIND_MODE" "build") "pnpx postcss source/style.css -o" output

    packageLockfile %> \output -> do
      need [packageJson]
      cmd_ "pnpm install"

showNotification built =
    cmd_
      "osascript -e"
      ["display notification \"" ++ text ++ "\" with title \"" ++ title ++ "\""]
  where
    text = intercalate ", " built ++ " were built successfully."
    title = "Build complete!"
