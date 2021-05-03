import Development.Shake
import Options.Applicative

mainCssFile = "style.css"

main = do
  shake shakeOptions $ do
    want [mainCssFile]
    mainCssFile %> \output -> do
      templateFiles <- getDirectoryFiles "" ["**/*.php"]
      cssFiles <- getDirectoryFiles "" ["source/**/*.css"]
      need $ templateFiles <> cssFiles
      cmd_ (AddEnv "TAILWIND_MODE" "build") "pnpx postcss source/style.css -o" output
