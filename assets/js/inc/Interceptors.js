import swal from 'sweetalert';

var Interceptors = {

      /*
          Request
      */
      request : {
          cb_success(config){
              // Only set the Authorization Header when the user is set
              if(Vue.auth.isAuthenticated())
                  config.headers.Authorization = Vue.auth.getAuthHeader().Authorization
              else
                  console.log('Authorization could not been added. User is NOT Auth????')

              console.log('Interceptor for request runs')

              return config;
          },

          cb_error(error){
              return Promise.reject(error);
          }
      },


      /*
          Response
      */
      response : {
          cb_success(response){
              return response;
          },

          cb_error(error){
              var status = error.response.status

              if(status == 401){
                  swal(status.toString(), error.response.data.message || error.response.data.error, 'error')
                  Vue.auth.destroyToken()
              }

              if(status == 500){
                  swal(status.toString(), "Something went wrong ... ", 'error')
              }

              return Promise.reject(error);
          }
      }
}

export default Interceptors;
