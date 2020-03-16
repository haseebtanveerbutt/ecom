const path = require('path');

module.exports = {
    entry: 'RatingFiles/src/rating.js',
    mode: 'production',
    output: {
        filename: 'rating.js',
        path: path.resolve(__dirname, 'RatingFiles/dist'),
    },
};
