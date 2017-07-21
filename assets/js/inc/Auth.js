/*
    Auth
*/
export default function (vue) {
    let user  = null;
    let store = null;

    Vue.auth = {
        name : '::Auth | ',
        debug : true,

        /*
            Set all nessesary tokens
        */
        setToken (token, refresh, exp) {
            localStorage.setItem('token', token)
            localStorage.setItem('refresh', refresh)
            localStorage.setItem('expiration', exp)
        },


        /*
            get auth Token
        */
        getToken () {
            var token = localStorage.getItem('token')
            var exp   = localStorage.getItem('expiration')

            if( !token || !exp )
                return null

            if( Date.now() > parseInt(exp) ) {
                this.destroyToken()
                return null
            }

            return token
        },


        /*
            get Refresh token
        */
        getRefreshToken(){
            return localStorage.getItem('refresh') || null;
        },


        /*
            destroy all tokens
        */
        destroyToken() {
            this.log('Destroy that thing')
            store.commit('ui/LOGOUT')
            // localStorage.removeItem('token')
            // localStorage.removeItem('expiration')
            // localStorage.removeItem('refresh')
        },


        /*
            Is user authenticated
        */
        isAuthenticated () {
            return this.getToken() ? true : false
        },


        /*
            Get a Auth Header Object for header preparation
        */
        getAuthHeader() {
            return { 'Authorization': 'Bearer ' + this.getToken() }
        },


        /*
            Set the HTTP header globally
        */
        setAuthHeader() {
            window.axios.defaults.headers.common['Authorization'] = this.getAuthHeader().Authorization
        },


        /*
            Set User Data by data
        */
        setLoginData(data){
            this.setToken(data.access_token, data.refresh_token, data.expires_in + Date.now())
            this.setUserObject()
        },


        /*
            Get saved user
        */
        getUser() {
            return user;
        },


        /*
            Save the user Object
        */
        setUser(u) {
            user = u
            this.log('Set User')
            console.log(u)
        },


        /*
            Set user Object wrapper
        */
        setUserObject(){
            if(this.isAuthenticated()){
                this.log("User is already Authenticated")
                this.requestUserObject()
            }
            else {
                this.log("User is NOT Authenticated. Do nothing")
            }
        },


        /*
            Login wrapper
        */
        login(data, cb){
            cb.that.$store.dispatch('ui/login', cb)
        },


        /*
            Refresh User Login by refresh token
        */
        refresh(){
            var data = {
               client_id: 2,
               client_secret: 'Uix01LSPoqUPpjaiDahLz48XLTqFOueOL43y1RM1',
               grant_type: 'refresh_token',
               refresh_token: this.getRefreshToken()
            }

            axios.post('/oauth/token', data)
                 .then( r => {
                     console.log(r)
                     this.setLoginData(r.data)
                 })
        },


        /*
            Logout Wrappers
        */
        logout(obj){
            obj.that.$store.dispatch('ui/logout', obj)
        },


        /*
            Request the current user Object and set user in $auth
        */
        requestUserObject(){
            this.log('Request User Object')

            if(this.isAuthenticated())
              axios.get('/api/user')
                 .then( r =>  this.setUser(r.data) )
            else
              this.log('Requset user Object cannot be run because no User is auth.')
        },


        /*
            Initial Check method for disptaching user statement
        */
        checkuser(obj){
            this.log('Checking User Object ')

            if(obj.$auth.isAuthenticated())
            obj.$store.dispatch('ui/checkuser', {
                that: obj
            })
        },


        /*
            Set Store (quick and dirty)
        */
        setStore(s){
            store = s
        },


        /*
            Log helper
        */
        log(m){
            if(this.debug)
            console.log(this.name + m)
        }

    }

    Object.defineProperties(Vue.prototype, {
        $auth: {
            get: () => { return Vue.auth }
        }
    })

}
