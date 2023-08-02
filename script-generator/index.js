var fs = require('fs');
var UglifyJS = require("uglify-js");

// minify frontend.js file
fs.readFile("script-generator/frontend.js", "utf8", (err, data) => {

    if (err) {
        console.error(err);
        return;
    }

    var minified = UglifyJS.minify(data, { mangle: { toplevel: true } }).code;

    fs.writeFile('assets/js/frontend.min.js', minified, function (err) {
        if (err) {
            console.log(err);
        } else {
            console.log("Script generated and saved to ", 'assets/js/frontend.min.js');
        }
    });

});
