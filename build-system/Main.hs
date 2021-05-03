import Data.List
import Development.Shake
import System.Environment ( getArgs )

mainCssFile = "style.css"

defaultTargets = [mainCssFile]

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
      need $ templateFiles <> cssFiles
      cmd_ (AddEnv "TAILWIND_MODE" "build") "pnpx postcss source/style.css -o" output

showNotification built =
    cmd_
      "osascript -e"
      ["display notification \"" ++ text ++ "\" with title \"" ++ title ++ "\""]
  where
    text = intercalate ", " built ++ " were built successfully."
    title = "Build complete!"
