#!/bin/bash

# Vérification de l'arborescence du projet
echo "🔍 Vérification de l'arborescence du projet..."

required_dirs=("site" "site/img" "site/css" "site/js" "src")

for dir in "${required_dirs[@]}"; do
  if [ ! -d "$dir" ]; then
    echo "❌ Erreur : Dossier manquant -> $dir"
    exit 1
  fi
done

echo "✅ Arborescence correcte."

# Vérification des fichiers dans les dossiers spécifiés
echo "🔍 Vérification des fichiers..."

declare -A allowed_extensions
allowed_extensions=( 
  ["site"]="html php"
  ["site/img"]="png jpg jpeg"
  ["site/css"]="css"
  ["site/js"]="js"
)

# Vérifier chaque fichier une seule fois
find site site/img site/css site/js -type f ! -name ".gitkeep" | while read -r file; do
  dir=$(dirname "$file")
  ext="${file##*.}"
  ext="${ext,,}"  # Met en minuscules

  echo "🔍 Vérification du fichier : $file (extension : $ext)"

  if [[ ! " ${allowed_extensions[$dir]} " =~ " $ext " ]]; then
    echo "❌ Erreur : Fichier non conforme -> $file"
    exit 1  # Arrêt immédiat
  fi
done

echo "✅ Tous les fichiers sont conformes."
