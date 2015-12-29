WP_VERSION="${1:-4.4}"

rm -rf .git
git init
rm -rf wp
git submodule add https://github.com/WordPress/WordPress.git wp
git remote rm origin
cd wp
git checkout $WP_VERSION
cd ..
git add .
git reset README.md prepare.sh
git commit -m "Initial commit with WordPress version $WP_VERSION"