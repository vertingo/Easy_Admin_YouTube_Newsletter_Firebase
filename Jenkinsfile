node {


    stage('checkout') {
        deleteDir()
        checkout scm
    }


    stage('Deploy to Heroku'){
        sh 'git push heroku master' 
   }

}
