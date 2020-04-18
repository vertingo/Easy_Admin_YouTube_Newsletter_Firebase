# Google Cloud CLI(https://cloud.google.com/sdk/)

#Pour que ça soit plus pratique il faut installer components beta:

gcloud components install beta

#Lister les components installé

gcloud components list

#Supprimer un component

gcloud components remove COMPONENT_ID

#Mettre a jour le SDK

gcloud components update

#Passer en mode context gcloud

gcloud beta interactive --context="gcloud "

#Afficher les configurations

gcloud config list

#Configurer le compte actif

gcloud config set account `ACCOUNT`

#Configurer une valeur pour un projet

gcloud  config set  project <project-id>

#Liste les projets dans Google Cloud

gcloud projects list

#Description du projet

gcloud projects describe <project_id>

#Ouvrir l'application dans une fenêtre(Fonctionne si l'application est hébergé sur Google Cloud!)

gcloud  app browse

```
Un petit coup de pouce suivez nous sur YouTube et Facebook!
[You Tube] ==> https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1 
[Facebook] ==> https://www.facebook.com/vertingo/ 
```

#Créer un bucket

gsutil mb -l us-east1 gs://my-storage/


#Upload un fichier sur le bucket

gsutil cp C:\Users\tedal\OneDrive\Bureau\README.md gs://my-storage2/


#Télécharger un fichier sur le bucket

gsutil cp gs://my-storage3/README.md C:\Users\tedal\OneDrive\Bureau\README2.md


#Lister les objets sur le bucket

gsutil ls gs://my-storage3/

#Rendre public le bucket

gsutil acl ch -u AllUsers:R gs://my-storage3/README.md

#Supprimer l'acces public au bucket

gsutil acl ch -d AllUsers gs://my-storage3/README.md


#Get iam policy

gcloud projects get-iam-policy <project_id>

#Functions

gcloud functions event-types list


```
Un petit coup de pouce suivez nous sur YouTube et Facebook!
[You Tube] ==> https://www.youtube.com/channel/UC2g_-ipVjit6ZlACPWG4JvA?sub_confirmation=1 
[Facebook] ==> https://www.facebook.com/vertingo/ 
```
