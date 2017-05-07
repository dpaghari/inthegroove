var webpack = require('webpack');
var path = require('path');
require('babel-polyfill');
require('babel-loader');

module.exports = {
  devtool: 'inline-source-map',
  entry: [
    './stylesheets/style.scss',
    './client/client.js'
  ],
  watch: true,
  output: {
    path: path.join(__dirname, 'public'),
    filename: 'client.min.js'
  },
  resolve: {
    alias: {
      'waypoints': 'waypoints/lib/jquery.waypoints.js'
    },
    modulesDirectories: ['node_modules', 'client', 'stylesheets'],
    extensions: ['', '.js', '.scss']
  },
  module: {
    loaders: [
      {
        // Only run .js and .jsx files through Babel
        test: /\.jsx?$/,
        include: path.resolve(__dirname, "client"),
        exclude: path.resolve(__dirname, "node_modules"),

        loader: 'babel-loader',
        query: {
          presets: ['es2015'],
          plugins: []
        }
      },
      { test: /\.(jpe?g|png|gif|svg)$/i, loader: "file-loader?name=[name].[ext]" },
      {
        test: /\.scss$/,
        include: path.resolve(__dirname, "stylesheets"),
        loaders: ["style", "css", "sass"]
      }
    ]
  },
  plugins: [
    new webpack.NoErrorsPlugin()
  ]
};
