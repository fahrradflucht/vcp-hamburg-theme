#!/usr/bin/env node
const { execSync } = require("child_process");
const fs = require("fs");

const styleCssPath = "./style.css";
const versionToken = / \* Version: 0\.(\d+)\.0/m;

// Increment version number
const styleCss = fs.readFileSync(styleCssPath, "utf8");
let newVersion = null;
fs.writeFileSync(
    styleCssPath,
    styleCss.replace(versionToken, (match, currentMinor) => {
        const newMinor = parseInt(currentMinor, 10) + 1;
        newVersion = `0.${newMinor}.0`;

        return match.replace(currentMinor, newMinor);
    })
);

// Git commit
execSync(`git add style.css`);
execSync(`git commit -m 'release: ${newVersion}'`);
execSync(`git tag -a 'v${newVersion}' -m 'v${newVersion}'`);
execSync(`git push --follow-tags`);
