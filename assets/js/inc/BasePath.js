var BasePath = {

      // Get core JS path
      getCorePath(pack){
          pack = pack || 'Core'
          return './../../../../' + pack + '/assets/js/'
      },

      // Load requirements
      loadRequirements(){
          require('./../../../../Core/assets/js/bootstrap')
      },


      // Get 'Specific page form package '
      getPage(pack, name){
          pack = pack || 'Core'
          return './../../../../' + pack + '/Resources/views/assets/js/pages/' + name
      },

      loadAuth(){
          return './../../../../Core/assets/js/inc/Auth.js'
      }

}

export default BasePath
