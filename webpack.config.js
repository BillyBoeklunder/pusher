const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
  context: path.resolve(__dirname, './frontend/src'),
  entry: './index.js',
  output: {
    path: path.resolve(__dirname, './public'),
    filename: 'js/[chunkhash].js',
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/,
        loader: 'babel-loader',
      },
    ],
  },
  plugins: [new HtmlWebpackPlugin({ template: 'index.ejs' })],
};
