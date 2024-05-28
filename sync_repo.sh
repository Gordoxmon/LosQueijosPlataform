#!/bin/bash

# Caminho para o seu repositório
REPO_PATH="/home/queijinhos/LosQueijosPlataform"

# Branch que você quer sincronizar
BRANCH="Main"

cd $REPO_PATH

# Sincroniza com o branch remoto

while true; do
  cd $REPO_PATH

  # Sincroniza com o branch remoto
  git fetch origin
  git checkout $BRANCH
  git pull origin $BRANCH

  # Espera 1 segundo antes de repetir
  sleep 1
done
