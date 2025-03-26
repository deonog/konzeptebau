module.exports = {
    "proxy": "localhost:8888",
    "files": [
        "dist/css/*.css",
        "**/*.php",
        "src/js/*.js"
    ],
    "ignore": [
        "node_modules"
    ],
    "notify": false,
    "open": false,
    "ghostMode": false
}; 