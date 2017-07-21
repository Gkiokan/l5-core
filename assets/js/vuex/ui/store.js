export default {
  /*
      The real obj
  */
   namespaced : true,

   state: {
        counter : 0,
        user : null,
        isLoggedIn: null,
        obj: null,
        token: {
            token :'',
            refresh: '',
            exp: ''
        }
   },


   /*
      Mutations
   */
   mutations: {
      ADD(state, obj){
          state.obj = obj
      },

      CLEAR(state){
          state.obj = 'cleared'
      },

      SET_TOKEN(state, obj){
          localStorage.setItem('token', obj.token)
          localStorage.setItem('refresh', obj.refresh)
          localStorage.setItem('expiration', obj.exp)

          state.token.token = obj.token
          state.token.refresh = obj.refresh
          state.token.exp = obj.exp

          state.isLoggedIn = true
      },

      LOGOUT(state, obj){
          localStorage.removeItem('token')
          localStorage.removeItem('expiration')

          state.token.token = ''
          state.token.exp = ''

          state.user = ''
          state.isLoggedIn = false
      },

      LOGIN(state, user){
          state.isLoggedIn = true
          state.user = user
      }
   },


   /*
      Actions
   */
   actions: {
      add( { commit }, obj) {
          commit('ADD', obj)
      },

      clear( { commit } ){
          commit('CLEAR')
      },

      login({ commit }, obj) {
          // cb   = obj.cb == undefined ? function(){ console.log('cb not defined ')} : obj.cb

          var data = {
             client_id: 2,
             client_secret: 'Uix01LSPoqUPpjaiDahLz48XLTqFOueOL43y1RM1',
             grant_type: 'password',
             username: obj.data.username || null,
             password: obj.data.password || null
          }

          axios.post('/oauth/token', data)
               .then( r => {
                   commit('SET_TOKEN', {
                      token: r.data.access_token,
                      refresh: r.data.refresh_token,
                      exp: r.data.expires_in + Date.now()
                   })

                   axios.get('/api/user').then( r => commit('LOGIN', r.data) )
                   obj.cb()
               })
      },

      logout({ commit }, obj) {
          axios.get('/api/user/logout')
               .then( r =>  {
                   console.log('Logging Out user')
                   console.log(r)
                   commit('LOGOUT');
                   obj.cb()
                })
      },

      checkuser({ state, commit }, obj){
          console.log('Running check user on store')
          axios.get('/api/user').then( r => commit('LOGIN', r.data) )
      }


   },


   /*
      Getters
   */
   getters: {
      user: state => state.user,
      state: state => state.obj,
      isLoggedIn: state => state.isLoggedIn,
      username: state => state.user ? state.user.name : 'NA'
   }
}
