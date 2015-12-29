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
    
#### Or make clean install with prepare.sh

This will initialize a new git repo and make a first commit. It will leave README.md and prepare.sh unstaged.

clone this repository:

    git clone https://github.com/sayme/wp-submodule-multi-environment.git my-project
    cd my-project
    
Run the the prepare script with a wp version (e.g. 4.4)  and add new origin repository:

    sh prepare.sh <wp-version>
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