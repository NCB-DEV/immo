<?php
    namespace App\Http\Middleware;
    use Illuminate\Auth\Middleware\Authenticate as Middleware;
    class Authenticate extends Middleware{
        /**
         *
         * @var array
         */
        protected $guards =["web"];
        /**
         * definir la route de redirection
         * @var string
         */
        protected $redirectTo='/Connexion-utilisateur';
        /**
         * verifier
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\RedirectResponse
         */
        public function handle($request,$next,...$guards){
            if(Auth::guard($this->guards)->check()){
                return $next($request);
            }
             return redirect()->to($this->redirectTo);
        }
    }
?>
