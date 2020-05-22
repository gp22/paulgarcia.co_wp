const path = require('path');
const glob = require('glob');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const StyleLintPlugin = require('stylelint-webpack-plugin');
const PurgecssPlugin = require('purgecss-webpack-plugin');

module.exports = (env, argv) => ({
  context: __dirname,
  entry: {
    frontend: ['./src/index.js', './src/sass/style.scss'],
    customizer: './src/customizer.js'
  },
  output: {
    path: path.resolve(__dirname, 'public'),
    filename: '[name]-bundle.js'
  },
  mode: 'development',
  devtool: 'cheap-eval-source-map',
  module: {
    rules: [
      {
        enforce: 'pre',
        exclude: /node_modules/,
        test: /\.jsx$/,
        loader: 'eslint-loader'
      },
      {
        test: /\.jsx?$/,
        loader: 'babel-loader'
      },
      {
        test: /\.s?css$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'postcss-loader',
            options: {
              ident: 'postcss',
              plugins: [require('autoprefixer')]
            }
          },
          'sass-loader'
        ]
      },
      {
        test: /\.svg$/,
        loader: 'svg-sprite-loader',
        options: {
          extract: true,
          spriteFilename: 'svg-defs.svg'
        }
      },
      {
        test: /\.(jpe?g|png|gif)\$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              outputPath: 'images/',
              name: '[name].[ext]'
            }
          },
          'img-loader'
        ]
      }
    ]
  },
  plugins: [
    new StyleLintPlugin(),
    new MiniCssExtractPlugin({
      filename: '[name].css'
    }),
    new BrowserSyncPlugin({
      files: '**/*.php',
      proxy: 'http://paulgarciaco.local/'
    }),
    ...(argv.mode === 'production'
      ? [
          new PurgecssPlugin({
            paths: glob.sync(`${path.resolve(__dirname)}/**/*.php`, { nodir: true }),
            defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
          })
        ]
      : [])
  ],
  optimization: {
    minimizer: [new UglifyJsPlugin(), new OptimizeCssAssetsPlugin()]
  }
});
