const path = require('path');
const entryDir = path.resolve(__dirname, 'assets');
const buildDir = path.resolve(__dirname, 'public/build');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

const extractPlugin = new ExtractTextPlugin({
    filename: 'index.css'
});

module.exports = {
    entry: {
        'index.css': [
            entryDir + '/css/index.css'
        ],
        'index.js': [
            entryDir + '/js/index.js'
        ]
    },    output: {
        path: buildDir,
        filename: '[name]'
    },
    devtool: 'source-map',
    module: {
        rules: [
            {
                test: /\.js$/,
                use: [{
                    loader: 'babel-loader',
                    options: {
                        presets: ['es2015']
                    }
                }]
            },
            {
                test: /\.css$/,
                use: extractPlugin.extract({
                    fallback: 'style-loader',
                    use: [{
                        loader: 'css-loader',
                        options: {
                            minimize: true,
                            autoprefixer: true
                        }
                    }]

                })
            }
        ]
    },
    plugins: [
        extractPlugin,
        new UglifyJSPlugin({
            sourceMap: true
        }),
    ]
};
