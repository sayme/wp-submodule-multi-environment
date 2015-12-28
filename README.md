WordPress Submodule and Multi-Environment
=====================

Setup and configuration for running WordPress as submodule with multi-environment config. This is what I use personally as a starting point. Feel free to fork the repository and customize it.

## Installation

Clone the repository:

    git clone --recursive https://github.com/sayme/wp-submodule-multi-environment.git my-project

Remove this origin repository:

    cd my-project
    git remote rm origin

Add new origin repository:

    git remote add origin <url>

## Upgrading WordPress

Go to the submodule directory:

    cd wp

Fetch the tags from git and checkout the version you want to upgrade to:

    git fetch --tags
    git checkout <tag>

Commit the WordPress upgrade:

    cd ..
    git commit -m "Updated WordPress to <new-version>"