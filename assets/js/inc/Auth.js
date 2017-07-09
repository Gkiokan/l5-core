/*
    Auth
*/
export default function (vue) {
    let user = null;

    Vue.auth = {
        name : '::Auth | ',
        debug : true,

        setToken (token, refresh, exp) {
            localStorage.setItem('token', token)
            localStorage.setItem('refresh', refresh)
            localStorage.setItem('expiration', exp)
        },

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

        getRefreshToken(){
            return localStorage.getItem('refresh') || null;
        },

        destroyToken () {
            localStorage.removeItem('token')
            localStorage.removeItem('expiration')
            // localStorage.removeItem('refresh')
        },


        isAuthenticated () {
            return this.getToken() ? true : false
        },


        getAuthHeader() {
            return { 'Authorization': 'Bearer ' + this.getToken() }
        },

        setAuthHeader() {
            window.axios.defaults.headers.common['Authorization'] = this.getAuthHeader().Authorization
        },

        setLoginData(data){
            this.setToken(data.access_token, data.refresh_token, data.expires_in + Date.now())
            this.setUserObject()
        },

        getUser() {
            return user;
        },

        setUser(u) {
            user = u
            this.log('Set User')
            console.log(u)
        },

        setUserObject(){
            if(this.isAuthenticated()){
                this.log("User is already Authenticated")
                this.requestUserObject()
            }
            else {
                this.log("User is NOT Authenticated. Do nothing")
            }
        },


        login(data, cb){
            cb.that.$store.dispatch('login', cb)
        },

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

        logout(obj){
            obj.that.$store.dispatch('logout', obj)
        },

        requestUserObject(){
            this.log('Setting up the user object')
            axios.get('/api/user')
                 .then( r =>  this.setUser(r.data) )
        },

        log(m){
            if(this.debug)
            console.log(this.name + m)
        },

        checkuser(obj){
            if(obj.$auth.isAuthenticated())
            obj.$store.dispatch('checkuser', {
                that: obj
            })
        }

    }

    Object.defineProperties(Vue.prototype, {
        $auth: {
            get: () => { return Vue.auth }
        }
    })

}
