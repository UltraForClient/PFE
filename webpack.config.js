const path = require('path');
const entryDir = path.resolve(__dirname, 'assets');
const buildDir = path.resolve(__dirname, 'public/build');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
    entry: {
        'index.css': [
            entryDir + '/css/index.css'
        ],
        'index.js': [
            entryDir + '/js/index.js'
        ]
    },
    output: {
        path: buildDir,
        filename: '[name]'
    },
    watch: true,
    devtool: 'source-map',
    module: {
        loaders: [{
            test: /\.js$/,
            exclude: /(node_modules|bower_components)/,
            use: {
                loader: 'babel-loader',
                options: {
                    presets: [[
                        'env',
                        {
                            targets: {
                                browsers: ['> 1%', 'safari >= 7']
                            }
                        }
                    ]]
                }
            }
        }],
        rules: [{
            test: /\.css$/,
            use: ExtractTextPlugin.extract({
                fallback: 'style-loader',
                use: [{
                    loader: 'css-loader',
                    options: {
                        minimize: true,
                        autoprefixer: true
                    }
                }]
            })
        }]
    },
    plugins: [
        new UglifyJSPlugin({
            sourceMap: true
        }),
        new ExtractTextPlugin('index.css'),
    ]
};