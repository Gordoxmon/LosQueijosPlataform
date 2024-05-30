#!/bin/bash

# Iniciar uma nova sessão screen chamada "sync_repo"
screen -dmS sync_repo

# Enviar o comando para iniciar o script de sincronização dentro da sessão screen
screen -S sync_repo -X stuff '/bin/bash /home/queijinhos/LosQueijosPlataform/sync_repo.sh\n'
