<?php
   
namespace amk\IpApi\Provider;

use Illuminate\Support\ServiceProvider;
use Amk\Ipapi\IPAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Amk\IpApi\Request\IpApi as IpApiRequest;

class IPAPIServiceProvider extends ServiceProvider {
        
        
        public function boot(): void
        {
            $this->requestRegister(['ipApi' => IpApiRequest::class]);
        }
        

        public function register(): void
        {
            $this->app->bind(IPAPI::class, function ($app) {
                return new IPAPI();
            });
        }

        private function requestRegister(array $data): void{           
            Collection::make($data)
            ->reject(function ($class, $macro) {
                return Request::hasMacro($macro);
            })
            ->each(function ($class, $macro) {
                Request::macro($macro, app($class)());
            });
        }
   }
?>