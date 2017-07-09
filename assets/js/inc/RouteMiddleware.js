var RouterMiddleware = {
    debug : true,
    name  : ':: RouterMiddleware | ',

    init(router, obj)  {
        this.configure(router, obj)
    },

    configure(router, obj){
        if(!router){
            this.log('Router Object is not provided, abboarding.')
            return;
        }

        if(!obj){
            this.log('Router Path Objects are not defined')
            return;
        }

        // Setup Router Middleware
        router.beforeEach((to, from, next) => {
                // Guest rule
                if(to.matched.some( record => record.meta.guest) ){
                    if(Vue.auth.isAuthenticated()){
                        this.log('User is Authenticated, sending to guest route')
                        next(obj.guest)
                    } else { next() }
                }

                // logged In users only
                else if(to.matched.some( record => record.meta.user) ){
                    if(!Vue.auth.isAuthenticated()){
                        this.log('User is not Authenticated, sending to user route')
                        next(obj.user)
                    } else { next() }
                }

                // anything else
                else { next() }
        })
    },

    log(m){
        if(this.debug)
        console.log(this.name + m)
    }
}

export default RouterMiddleware
