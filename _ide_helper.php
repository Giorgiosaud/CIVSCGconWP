<?php
/**
 * An helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.0.30 on 2015-05-19.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {
    exit("This file should not be included, only analyzed by your IDE");

    class App extends \Illuminate\Support\Facades\App{
        
        /**
         * 
         *
         * @static 
         */
        public static function version(){
            return \Illuminate\Foundation\Application::version();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bootstrapWith($bootstrappers){
            return \Illuminate\Foundation\Application::bootstrapWith($bootstrappers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function afterLoadingEnvironment($callback){
            return \Illuminate\Foundation\Application::afterLoadingEnvironment($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function beforeBootstrapping($bootstrapper, $callback){
            return \Illuminate\Foundation\Application::beforeBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function afterBootstrapping($bootstrapper, $callback){
            return \Illuminate\Foundation\Application::afterBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasBeenBootstrapped(){
            return \Illuminate\Foundation\Application::hasBeenBootstrapped();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setBasePath($basePath){
            return \Illuminate\Foundation\Application::setBasePath($basePath);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function path(){
            return \Illuminate\Foundation\Application::path();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function basePath(){
            return \Illuminate\Foundation\Application::basePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function configPath(){
            return \Illuminate\Foundation\Application::configPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function databasePath(){
            return \Illuminate\Foundation\Application::databasePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useDatabasePath($path){
            return \Illuminate\Foundation\Application::useDatabasePath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function langPath(){
            return \Illuminate\Foundation\Application::langPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function publicPath(){
            return \Illuminate\Foundation\Application::publicPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function storagePath(){
            return \Illuminate\Foundation\Application::storagePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useStoragePath($path){
            return \Illuminate\Foundation\Application::useStoragePath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function loadEnvironmentFrom($file){
            return \Illuminate\Foundation\Application::loadEnvironmentFrom($file);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function environmentFile(){
            return \Illuminate\Foundation\Application::environmentFile();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function environment(){
            return \Illuminate\Foundation\Application::environment();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isLocal(){
            return \Illuminate\Foundation\Application::isLocal();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function detectEnvironment($callback){
            return \Illuminate\Foundation\Application::detectEnvironment($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function runningInConsole(){
            return \Illuminate\Foundation\Application::runningInConsole();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function runningUnitTests(){
            return \Illuminate\Foundation\Application::runningUnitTests();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerConfiguredProviders(){
            return \Illuminate\Foundation\Application::registerConfiguredProviders();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function register($provider, $options = array(), $force = false){
            return \Illuminate\Foundation\Application::register($provider, $options, $force);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getProvider($provider){
            return \Illuminate\Foundation\Application::getProvider($provider);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolveProviderClass($provider){
            return \Illuminate\Foundation\Application::resolveProviderClass($provider);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function loadDeferredProviders(){
            return \Illuminate\Foundation\Application::loadDeferredProviders();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function loadDeferredProvider($service){
            return \Illuminate\Foundation\Application::loadDeferredProvider($service);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerDeferredProvider($provider, $service = null){
            return \Illuminate\Foundation\Application::registerDeferredProvider($provider, $service);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function make($abstract, $parameters = array()){
            return \Illuminate\Foundation\Application::make($abstract, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bound($abstract){
            return \Illuminate\Foundation\Application::bound($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isBooted(){
            return \Illuminate\Foundation\Application::isBooted();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function boot(){
            return \Illuminate\Foundation\Application::boot();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function booting($callback){
            return \Illuminate\Foundation\Application::booting($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function booted($callback){
            return \Illuminate\Foundation\Application::booted($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function handle($request, $type = 1, $catch = true){
            return \Illuminate\Foundation\Application::handle($request, $type, $catch);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function configurationIsCached(){
            return \Illuminate\Foundation\Application::configurationIsCached();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCachedConfigPath(){
            return \Illuminate\Foundation\Application::getCachedConfigPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function routesAreCached(){
            return \Illuminate\Foundation\Application::routesAreCached();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCachedRoutesPath(){
            return \Illuminate\Foundation\Application::getCachedRoutesPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCachedCompilePath(){
            return \Illuminate\Foundation\Application::getCachedCompilePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCachedServicesPath(){
            return \Illuminate\Foundation\Application::getCachedServicesPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function vendorIsWritableForOptimizations(){
            return \Illuminate\Foundation\Application::vendorIsWritableForOptimizations();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useStoragePathForOptimizations($value = true){
            return \Illuminate\Foundation\Application::useStoragePathForOptimizations($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDownForMaintenance(){
            return \Illuminate\Foundation\Application::isDownForMaintenance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function down($callback){
            return \Illuminate\Foundation\Application::down($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function abort($code, $message = '', $headers = array()){
            return \Illuminate\Foundation\Application::abort($code, $message, $headers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function terminating($callback){
            return \Illuminate\Foundation\Application::terminating($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function terminate(){
            return \Illuminate\Foundation\Application::terminate();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLoadedProviders(){
            return \Illuminate\Foundation\Application::getLoadedProviders();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDeferredServices(){
            return \Illuminate\Foundation\Application::getDeferredServices();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDeferredServices($services){
            return \Illuminate\Foundation\Application::setDeferredServices($services);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addDeferredServices($services){
            return \Illuminate\Foundation\Application::addDeferredServices($services);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDeferredService($service){
            return \Illuminate\Foundation\Application::isDeferredService($service);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            return \Illuminate\Foundation\Application::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            return \Illuminate\Foundation\Application::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerCoreContainerAliases(){
            return \Illuminate\Foundation\Application::registerCoreContainerAliases();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Foundation\Application::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function when($concrete){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::when($concrete);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolved($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolved($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isAlias($name){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isAlias($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bind($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addContextualBinding($concrete, $abstract, $implementation){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bindIf($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function singleton($abstract, $concrete = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::singleton($abstract, $concrete);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function share($closure){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::share($closure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bindShared($abstract, $closure){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::bindShared($abstract, $closure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($abstract, $closure){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::extend($abstract, $closure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function instance($abstract, $instance){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::instance($abstract, $instance);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function tag($abstracts, $tags){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tag($abstracts, $tags);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function tagged($tag){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tagged($tag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alias($abstract, $alias){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::alias($abstract, $alias);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function rebinding($abstract, $callback){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::rebinding($abstract, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function refresh($abstract, $target, $method){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::refresh($abstract, $target, $method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function wrap($callback, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::wrap($callback, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function call($callback, $parameters = array(), $defaultMethod = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function build($concrete, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::build($concrete, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolving($abstract, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function afterResolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::afterResolving($abstract, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isShared($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isShared($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBindings(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getBindings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forgetInstance($abstract){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::forgetInstance($abstract);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forgetInstances(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::forgetInstances();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getInstance(){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getInstance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setInstance($container){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::setInstance($container);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetExists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetGet($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($key, $value){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetSet($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($key){
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetUnset($key);
        }
        
    }


    class Artisan extends \Illuminate\Support\Facades\Artisan{
        
        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface $output
         * @return int 
         * @static 
         */
        public static function handle($input, $output = null){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::handle($input, $output);
        }
        
        /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         * @return void 
         * @static 
         */
        public static function terminate($input, $status){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::terminate($input, $status);
        }
        
        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @return int 
         * @static 
         */
        public static function call($command, $parameters = array()){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::call($command, $parameters);
        }
        
        /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return void 
         * @static 
         */
        public static function queue($command, $parameters = array()){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::queue($command, $parameters);
        }
        
        /**
         * Get all of the commands registered with the console.
         *
         * @return array 
         * @static 
         */
        public static function all(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::all();
        }
        
        /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */
        public static function output(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::output();
        }
        
        /**
         * Bootstrap the application for HTTP requests.
         *
         * @return void 
         * @static 
         */
        public static function bootstrap(){
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::bootstrap();
        }
        
    }


    class Auth extends \Illuminate\Support\Facades\Auth{
        
        /**
         * 
         *
         * @static 
         */
        public static function createDatabaseDriver(){
            return \Illuminate\Auth\AuthManager::createDatabaseDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createEloquentDriver(){
            return \Illuminate\Auth\AuthManager::createEloquentDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultDriver($name){
            return \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Auth\AuthManager::driver($driver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Auth\AuthManager::getDrivers();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function check(){
            return \Illuminate\Auth\Guard::check();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function guest(){
            return \Illuminate\Auth\Guard::guest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function user(){
            return \Illuminate\Auth\Guard::user();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function id(){
            return \Illuminate\Auth\Guard::id();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function once($credentials = array()){
            return \Illuminate\Auth\Guard::once($credentials);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function validate($credentials = array()){
            return \Illuminate\Auth\Guard::validate($credentials);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function basic($field = 'email'){
            return \Illuminate\Auth\Guard::basic($field);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function onceBasic($field = 'email'){
            return \Illuminate\Auth\Guard::onceBasic($field);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function attempt($credentials = array(), $remember = false, $login = true){
            return \Illuminate\Auth\Guard::attempt($credentials, $remember, $login);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function attempting($callback){
            return \Illuminate\Auth\Guard::attempting($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function login($user, $remember = false){
            return \Illuminate\Auth\Guard::login($user, $remember);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function loginUsingId($id, $remember = false){
            return \Illuminate\Auth\Guard::loginUsingId($id, $remember);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function onceUsingId($id){
            return \Illuminate\Auth\Guard::onceUsingId($id);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function logout(){
            return \Illuminate\Auth\Guard::logout();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCookieJar(){
            return \Illuminate\Auth\Guard::getCookieJar();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setCookieJar($cookie){
            return \Illuminate\Auth\Guard::setCookieJar($cookie);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDispatcher(){
            return \Illuminate\Auth\Guard::getDispatcher();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDispatcher($events){
            return \Illuminate\Auth\Guard::setDispatcher($events);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSession(){
            return \Illuminate\Auth\Guard::getSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getProvider(){
            return \Illuminate\Auth\Guard::getProvider();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setProvider($provider){
            return \Illuminate\Auth\Guard::setProvider($provider);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUser(){
            return \Illuminate\Auth\Guard::getUser();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setUser($user){
            return \Illuminate\Auth\Guard::setUser($user);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequest(){
            return \Illuminate\Auth\Guard::getRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequest($request){
            return \Illuminate\Auth\Guard::setRequest($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLastAttempted(){
            return \Illuminate\Auth\Guard::getLastAttempted();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getName(){
            return \Illuminate\Auth\Guard::getName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRecallerName(){
            return \Illuminate\Auth\Guard::getRecallerName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function viaRemember(){
            return \Illuminate\Auth\Guard::viaRemember();
        }
        
    }


    class Blade extends \Illuminate\Support\Facades\Blade{
        
        /**
         * 
         *
         * @static 
         */
        public static function compile($path = null){
            return \Illuminate\View\Compilers\BladeCompiler::compile($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPath(){
            return \Illuminate\View\Compilers\BladeCompiler::getPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setPath($path){
            return \Illuminate\View\Compilers\BladeCompiler::setPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function compileString($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function compileEchoDefaults($value){
            return \Illuminate\View\Compilers\BladeCompiler::compileEchoDefaults($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($compiler){
            return \Illuminate\View\Compilers\BladeCompiler::extend($compiler);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createMatcher($function){
            return \Illuminate\View\Compilers\BladeCompiler::createMatcher($function);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createOpenMatcher($function){
            return \Illuminate\View\Compilers\BladeCompiler::createOpenMatcher($function);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createPlainMatcher($function){
            return \Illuminate\View\Compilers\BladeCompiler::createPlainMatcher($function);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRawTags($openTag, $closeTag){
            return \Illuminate\View\Compilers\BladeCompiler::setRawTags($openTag, $closeTag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setContentTags($openTag, $closeTag, $escaped = false){
            return \Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEscapedContentTags($openTag, $closeTag){
            return \Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getContentTags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEscapedContentTags(){
            return \Illuminate\View\Compilers\BladeCompiler::getEscapedContentTags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEchoFormat($format){
            return \Illuminate\View\Compilers\BladeCompiler::setEchoFormat($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCompiledPath($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isExpired($path){
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
        }
        
    }


    class Bus extends \Illuminate\Support\Facades\Bus{
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatchFromArray($command, $array){
            return \Illuminate\Bus\Dispatcher::dispatchFromArray($command, $array);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatchFrom($command, $source, $extras = array()){
            return \Illuminate\Bus\Dispatcher::dispatchFrom($command, $source, $extras);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatch($command, $afterResolving = null){
            return \Illuminate\Bus\Dispatcher::dispatch($command, $afterResolving);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatchNow($command, $afterResolving = null){
            return \Illuminate\Bus\Dispatcher::dispatchNow($command, $afterResolving);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatchToQueue($command){
            return \Illuminate\Bus\Dispatcher::dispatchToQueue($command);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resolveHandler($command){
            return \Illuminate\Bus\Dispatcher::resolveHandler($command);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHandlerClass($command){
            return \Illuminate\Bus\Dispatcher::getHandlerClass($command);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHandlerMethod($command){
            return \Illuminate\Bus\Dispatcher::getHandlerMethod($command);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function maps($commands){
            return \Illuminate\Bus\Dispatcher::maps($commands);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mapUsing($mapper){
            return \Illuminate\Bus\Dispatcher::mapUsing($mapper);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function simpleMapping($command, $commandNamespace, $handlerNamespace){
            return \Illuminate\Bus\Dispatcher::simpleMapping($command, $commandNamespace, $handlerNamespace);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pipeThrough($pipes){
            return \Illuminate\Bus\Dispatcher::pipeThrough($pipes);
        }
        
    }


    class Cache extends \Illuminate\Support\Facades\Cache{
        
        /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
         * @return mixed 
         * @static 
         */
        public static function store($name = null){
            return \Illuminate\Cache\CacheManager::store($name);
        }
        
        /**
         * Get a cache driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */
        public static function driver($driver = null){
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
        
        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository 
         * @static 
         */
        public static function repository($store){
            return \Illuminate\Cache\CacheManager::repository($store);
        }
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
        
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($events){
            \Illuminate\Cache\Repository::setEventDispatcher($events);
        }
        
        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function has($key){
            return \Illuminate\Cache\Repository::has($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Cache\Repository::get($key, $default);
        }
        
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Cache\Repository::pull($key, $default);
        }
        
        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return void 
         * @static 
         */
        public static function put($key, $value, $minutes){
            \Illuminate\Cache\Repository::put($key, $value, $minutes);
        }
        
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return bool 
         * @static 
         */
        public static function add($key, $value, $minutes){
            return \Illuminate\Cache\Repository::add($key, $value, $minutes);
        }
        
        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function forever($key, $value){
            \Illuminate\Cache\Repository::forever($key, $value);
        }
        
        /**
         * Get an item from the cache, or store the default value.
         *
         * @param string $key
         * @param \DateTime|int $minutes
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function remember($key, $minutes, $callback){
            return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function sear($key, $callback){
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function rememberForever($key, $callback){
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function forget($key){
            return \Illuminate\Cache\Repository::forget($key);
        }
        
        /**
         * Get the default cache time.
         *
         * @return int 
         * @static 
         */
        public static function getDefaultCacheTime(){
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }
        
        /**
         * Set the default cache time in minutes.
         *
         * @param int $minutes
         * @return void 
         * @static 
         */
        public static function setDefaultCacheTime($minutes){
            \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
        }
        
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */
        public static function getStore(){
            return \Illuminate\Cache\Repository::getStore();
        }
        
        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Cache\Repository::offsetExists($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Cache\Repository::offsetGet($key);
        }
        
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */
        public static function offsetSet($key, $value){
            \Illuminate\Cache\Repository::offsetSet($key, $value);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */
        public static function offsetUnset($key){
            \Illuminate\Cache\Repository::offsetUnset($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Cache\Repository::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macroCall($method, $parameters){
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }
        
        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int 
         * @static 
         */
        public static function increment($key, $value = 1){
            return \Illuminate\Cache\FileStore::increment($key, $value);
        }
        
        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int 
         * @static 
         */
        public static function decrement($key, $value = 1){
            return \Illuminate\Cache\FileStore::decrement($key, $value);
        }
        
        /**
         * Remove all items from the cache.
         *
         * @return void 
         * @static 
         */
        public static function flush(){
            \Illuminate\Cache\FileStore::flush();
        }
        
        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */
        public static function getFilesystem(){
            return \Illuminate\Cache\FileStore::getFilesystem();
        }
        
        /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */
        public static function getDirectory(){
            return \Illuminate\Cache\FileStore::getDirectory();
        }
        
        /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */
        public static function getPrefix(){
            return \Illuminate\Cache\FileStore::getPrefix();
        }
        
    }


    class Config extends \Illuminate\Support\Facades\Config{
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key){
            return \Illuminate\Config\Repository::has($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $default = null){
            return \Illuminate\Config\Repository::get($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function set($key, $value = null){
            return \Illuminate\Config\Repository::set($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepend($key, $value){
            return \Illuminate\Config\Repository::prepend($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function push($key, $value){
            return \Illuminate\Config\Repository::push($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Config\Repository::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($key){
            return \Illuminate\Config\Repository::offsetExists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($key){
            return \Illuminate\Config\Repository::offsetGet($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($key, $value){
            return \Illuminate\Config\Repository::offsetSet($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($key){
            return \Illuminate\Config\Repository::offsetUnset($key);
        }
        
    }


    class Cookie extends \Illuminate\Support\Facades\Cookie{
        
        /**
         * 
         *
         * @static 
         */
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($name, $path = null, $domain = null){
            return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasQueued($key){
            return \Illuminate\Cookie\CookieJar::hasQueued($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queued($key, $default = null){
            return \Illuminate\Cookie\CookieJar::queued($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function queue(){
            return \Illuminate\Cookie\CookieJar::queue();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function unqueue($name){
            return \Illuminate\Cookie\CookieJar::unqueue($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultPathAndDomain($path, $domain){
            return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueuedCookies(){
            return \Illuminate\Cookie\CookieJar::getQueuedCookies();
        }
        
    }


    class Crypt extends \Illuminate\Support\Facades\Crypt{
        
        /**
         * 
         *
         * @static 
         */
        public static function encrypt($value){
            return \Illuminate\Encryption\Encrypter::encrypt($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decrypt($payload){
            return \Illuminate\Encryption\Encrypter::decrypt($payload);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setKey($key){
            return \Illuminate\Encryption\Encrypter::setKey($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setCipher($cipher){
            return \Illuminate\Encryption\Encrypter::setCipher($cipher);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setMode($mode){
            return \Illuminate\Encryption\Encrypter::setMode($mode);
        }
        
    }


    class DB extends \Illuminate\Support\Facades\DB{
        
        /**
         * 
         *
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function purge($name = null){
            return \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function disconnect($name = null){
            return \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function reconnect($name = null){
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultConnection(){
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultConnection($name){
            return \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($name, $resolver){
            return \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getConnections(){
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */
        public static function getSchemaBuilder(){
            return \Illuminate\Database\MySqlConnection::getSchemaBuilder();
        }
        
        /**
         * Set the query grammar to the default implementation.
         *
         * @return void 
         * @static 
         */
        public static function useDefaultQueryGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
        }
        
        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void 
         * @static 
         */
        public static function useDefaultSchemaGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
        }
        
        /**
         * Set the query post processor to the default implementation.
         *
         * @return void 
         * @static 
         */
        public static function useDefaultPostProcessor(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
        }
        
        /**
         * Begin a fluent query against a database table.
         *
         * @param string $table
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function table($table){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::table($table);
        }
        
        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */
        public static function raw($value){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::raw($value);
        }
        
        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @return mixed 
         * @static 
         */
        public static function selectOne($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectOne($query, $bindings);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array 
         * @static 
         */
        public static function selectFromWriteConnection($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectFromWriteConnection($query, $bindings);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */
        public static function select($query, $bindings = array(), $useReadPdo = true){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::select($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */
        public static function insert($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::insert($query, $bindings);
        }
        
        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */
        public static function update($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::update($query, $bindings);
        }
        
        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */
        public static function delete($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::delete($query, $bindings);
        }
        
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */
        public static function statement($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::statement($query, $bindings);
        }
        
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */
        public static function affectingStatement($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
        }
        
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool 
         * @static 
         */
        public static function unprepared($query){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::unprepared($query);
        }
        
        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array 
         * @static 
         */
        public static function prepareBindings($bindings){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::prepareBindings($bindings);
        }
        
        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @return mixed 
         * @throws \Exception
         * @static 
         */
        public static function transaction($callback){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transaction($callback);
        }
        
        /**
         * Start a new database transaction.
         *
         * @return void 
         * @static 
         */
        public static function beginTransaction(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::beginTransaction();
        }
        
        /**
         * Commit the active database transaction.
         *
         * @return void 
         * @static 
         */
        public static function commit(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::commit();
        }
        
        /**
         * Rollback the active database transaction.
         *
         * @return void 
         * @static 
         */
        public static function rollBack(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::rollBack();
        }
        
        /**
         * Get the number of active transactions.
         *
         * @return int 
         * @static 
         */
        public static function transactionLevel(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transactionLevel();
        }
        
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array 
         * @static 
         */
        public static function pretend($callback){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretend($callback);
        }
        
        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void 
         * @static 
         */
        public static function logQuery($query, $bindings, $time = null){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
        }
        
        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function listen($callback){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::listen($callback);
        }
        
        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column 
         * @static 
         */
        public static function getDoctrineColumn($table, $column){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
        }
        
        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager 
         * @static 
         */
        public static function getDoctrineSchemaManager(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
        }
        
        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection 
         * @static 
         */
        public static function getDoctrineConnection(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineConnection();
        }
        
        /**
         * Get the current PDO connection.
         *
         * @return \PDO 
         * @static 
         */
        public static function getPdo(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPdo();
        }
        
        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO 
         * @static 
         */
        public static function getReadPdo(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getReadPdo();
        }
        
        /**
         * Set the PDO connection.
         *
         * @param \PDO|null $pdo
         * @return $this 
         * @static 
         */
        public static function setPdo($pdo){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setPdo($pdo);
        }
        
        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|null $pdo
         * @return $this 
         * @static 
         */
        public static function setReadPdo($pdo){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReadPdo($pdo);
        }
        
        /**
         * Set the reconnect instance on the connection.
         *
         * @param callable $reconnector
         * @return $this 
         * @static 
         */
        public static function setReconnector($reconnector){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReconnector($reconnector);
        }
        
        /**
         * Get the database connection name.
         *
         * @return string|null 
         * @static 
         */
        public static function getName(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getName();
        }
        
        /**
         * Get an option from the configuration options.
         *
         * @param string $option
         * @return mixed 
         * @static 
         */
        public static function getConfig($option){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getConfig($option);
        }
        
        /**
         * Get the PDO driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDriverName(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDriverName();
        }
        
        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */
        public static function getQueryGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryGrammar();
        }
        
        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar
         * @return void 
         * @static 
         */
        public static function setQueryGrammar($grammar){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
        }
        
        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar 
         * @static 
         */
        public static function getSchemaGrammar(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getSchemaGrammar();
        }
        
        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar
         * @return void 
         * @static 
         */
        public static function setSchemaGrammar($grammar){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
        }
        
        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */
        public static function getPostProcessor(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPostProcessor();
        }
        
        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor
         * @return void 
         * @static 
         */
        public static function setPostProcessor($processor){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setPostProcessor($processor);
        }
        
        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher
         * @return void 
         * @static 
         */
        public static function setEventDispatcher($events){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setEventDispatcher($events);
        }
        
        /**
         * Determine if the connection in a "dry run".
         *
         * @return bool 
         * @static 
         */
        public static function pretending(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretending();
        }
        
        /**
         * Get the default fetch mode for the connection.
         *
         * @return int 
         * @static 
         */
        public static function getFetchMode(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getFetchMode();
        }
        
        /**
         * Set the default fetch mode for the connection.
         *
         * @param int $fetchMode
         * @return int 
         * @static 
         */
        public static function setFetchMode($fetchMode){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setFetchMode($fetchMode);
        }
        
        /**
         * Get the connection query log.
         *
         * @return array 
         * @static 
         */
        public static function getQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryLog();
        }
        
        /**
         * Clear the query log.
         *
         * @return void 
         * @static 
         */
        public static function flushQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::flushQueryLog();
        }
        
        /**
         * Enable the query log on the connection.
         *
         * @return void 
         * @static 
         */
        public static function enableQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::enableQueryLog();
        }
        
        /**
         * Disable the query log on the connection.
         *
         * @return void 
         * @static 
         */
        public static function disableQueryLog(){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::disableQueryLog();
        }
        
        /**
         * Determine whether we're logging queries.
         *
         * @return bool 
         * @static 
         */
        public static function logging(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::logging();
        }
        
        /**
         * Get the name of the connected database.
         *
         * @return string 
         * @static 
         */
        public static function getDatabaseName(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDatabaseName();
        }
        
        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return string 
         * @static 
         */
        public static function setDatabaseName($database){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setDatabaseName($database);
        }
        
        /**
         * Get the table prefix for the connection.
         *
         * @return string 
         * @static 
         */
        public static function getTablePrefix(){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getTablePrefix();
        }
        
        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return void 
         * @static 
         */
        public static function setTablePrefix($prefix){
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
        }
        
        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar 
         * @static 
         */
        public static function withTablePrefix($grammar){
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
        }
        
    }


    class Eloquent extends \Illuminate\Database\Eloquent\Model{
        
        /**
         * Find a model by its primary key.
         *
         * @param array $ids
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Collection 
         * @static 
         */
        public static function findMany($ids, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::findMany($ids, $columns);
        }
        
        /**
         * Find a model by its primary key or throw an exception.
         *
         * @param mixed $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static 
         */
        public static function findOrFail($id, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::findOrFail($id, $columns);
        }
        
        /**
         * Execute the query and get the first result.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|static|null 
         * @static 
         */
        public static function first($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::first($columns);
        }
        
        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model|static 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static 
         */
        public static function firstOrFail($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
        }
        
        /**
         * Execute the query as a "select" statement.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Collection|static[] 
         * @static 
         */
        public static function get($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::get($columns);
        }
        
        /**
         * Pluck a single column from the database.
         *
         * @param string $column
         * @return mixed 
         * @static 
         */
        public static function pluck($column){
            return \Illuminate\Database\Eloquent\Builder::pluck($column);
        }
        
        /**
         * Chunk the results of the query.
         *
         * @param int $count
         * @param callable $callback
         * @return void 
         * @static 
         */
        public static function chunk($count, $callback){
            \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
        }
        
        /**
         * Get an array with the values of a given column.
         *
         * @param string $column
         * @param string $key
         * @return array 
         * @static 
         */
        public static function lists($column, $key = null){
            return \Illuminate\Database\Eloquent\Builder::lists($column, $key);
        }
        
        /**
         * Paginate the given query.
         *
         * @param int $perPage
         * @param array $columns
         * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator 
         * @static 
         */
        public static function paginate($perPage = null, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns);
        }
        
        /**
         * Paginate the given query into a simple paginator.
         *
         * @param int $perPage
         * @param array $columns
         * @return \Illuminate\Contracts\Pagination\Paginator 
         * @static 
         */
        public static function simplePaginate($perPage = null, $columns = array()){
            return \Illuminate\Database\Eloquent\Builder::simplePaginate($perPage, $columns);
        }
        
        /**
         * Register a replacement for the default delete function.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function onDelete($callback){
            \Illuminate\Database\Eloquent\Builder::onDelete($callback);
        }
        
        /**
         * Get the hydrated models without eager loading.
         *
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model[] 
         * @static 
         */
        public static function getModels($columns = array()){
            return \Illuminate\Database\Eloquent\Builder::getModels($columns);
        }
        
        /**
         * Eager load the relationships for the models.
         *
         * @param array $models
         * @return array 
         * @static 
         */
        public static function eagerLoadRelations($models){
            return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
        }
        
        /**
         * Add a basic where clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed $value
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function where($column, $operator = null, $value = null, $boolean = 'and'){
            return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
        }
        
        /**
         * Add an "or where" clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed $value
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function orWhere($column, $operator = null, $value = null){
            return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
        }
        
        /**
         * Add a relationship count condition to the query.
         *
         * @param string $relation
         * @param string $operator
         * @param int $count
         * @param string $boolean
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null){
            return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
        }
        
        /**
         * Add a relationship count condition to the query.
         *
         * @param string $relation
         * @param string $boolean
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function doesntHave($relation, $boolean = 'and', $callback = null){
            return \Illuminate\Database\Eloquent\Builder::doesntHave($relation, $boolean, $callback);
        }
        
        /**
         * Add a relationship count condition to the query with where clauses.
         *
         * @param string $relation
         * @param \Closure $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function whereHas($relation, $callback, $operator = '>=', $count = 1){
            return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
        }
        
        /**
         * Add a relationship count condition to the query with where clauses.
         *
         * @param string $relation
         * @param \Closure|null $callback
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function whereDoesntHave($relation, $callback = null){
            return \Illuminate\Database\Eloquent\Builder::whereDoesntHave($relation, $callback);
        }
        
        /**
         * Add a relationship count condition to the query with an "or".
         *
         * @param string $relation
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function orHas($relation, $operator = '>=', $count = 1){
            return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
        }
        
        /**
         * Add a relationship count condition to the query with where clauses and an "or".
         *
         * @param string $relation
         * @param \Closure $callback
         * @param string $operator
         * @param int $count
         * @return \Illuminate\Database\Eloquent\Builder|static 
         * @static 
         */
        public static function orWhereHas($relation, $callback, $operator = '>=', $count = 1){
            return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
        }
        
        /**
         * Get the underlying query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function getQuery(){
            return \Illuminate\Database\Eloquent\Builder::getQuery();
        }
        
        /**
         * Set the underlying query builder instance.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return $this 
         * @static 
         */
        public static function setQuery($query){
            return \Illuminate\Database\Eloquent\Builder::setQuery($query);
        }
        
        /**
         * Get the relationships being eagerly loaded.
         *
         * @return array 
         * @static 
         */
        public static function getEagerLoads(){
            return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
        }
        
        /**
         * Set the relationships being eagerly loaded.
         *
         * @param array $eagerLoad
         * @return $this 
         * @static 
         */
        public static function setEagerLoads($eagerLoad){
            return \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
        }
        
        /**
         * Get the model instance being queried.
         *
         * @return \Illuminate\Database\Eloquent\Model 
         * @static 
         */
        public static function getModel(){
            return \Illuminate\Database\Eloquent\Builder::getModel();
        }
        
        /**
         * Set a model instance for the model being queried.
         *
         * @param \Illuminate\Database\Eloquent\Model $model
         * @return $this 
         * @static 
         */
        public static function setModel($model){
            return \Illuminate\Database\Eloquent\Builder::setModel($model);
        }
        
        /**
         * Extend the builder with a given callback.
         *
         * @param string $name
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function macro($name, $callback){
            \Illuminate\Database\Eloquent\Builder::macro($name, $callback);
        }
        
        /**
         * Get the given macro by name.
         *
         * @param string $name
         * @return \Closure 
         * @static 
         */
        public static function getMacro($name){
            return \Illuminate\Database\Eloquent\Builder::getMacro($name);
        }
        
        /**
         * Set the columns to be selected.
         *
         * @param array $columns
         * @return $this 
         * @static 
         */
        public static function select($columns = array()){
            return \Illuminate\Database\Query\Builder::select($columns);
        }
        
        /**
         * Add a new "raw" select expression to the query.
         *
         * @param string $expression
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function selectRaw($expression, $bindings = array()){
            return \Illuminate\Database\Query\Builder::selectRaw($expression, $bindings);
        }
        
        /**
         * Add a subselect expression to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|string $query
         * @param string $as
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function selectSub($query, $as){
            return \Illuminate\Database\Query\Builder::selectSub($query, $as);
        }
        
        /**
         * Add a new select column to the query.
         *
         * @param mixed $column
         * @return $this 
         * @static 
         */
        public static function addSelect($column){
            return \Illuminate\Database\Query\Builder::addSelect($column);
        }
        
        /**
         * Force the query to only return distinct results.
         *
         * @return $this 
         * @static 
         */
        public static function distinct(){
            return \Illuminate\Database\Query\Builder::distinct();
        }
        
        /**
         * Set the table which the query is targeting.
         *
         * @param string $table
         * @return $this 
         * @static 
         */
        public static function from($table){
            return \Illuminate\Database\Query\Builder::from($table);
        }
        
        /**
         * Add a join clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @param string $type
         * @param bool $where
         * @return $this 
         * @static 
         */
        public static function join($table, $one, $operator = null, $two = null, $type = 'inner', $where = false){
            return \Illuminate\Database\Query\Builder::join($table, $one, $operator, $two, $type, $where);
        }
        
        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @param string $type
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function joinWhere($table, $one, $operator, $two, $type = 'inner'){
            return \Illuminate\Database\Query\Builder::joinWhere($table, $one, $operator, $two, $type);
        }
        
        /**
         * Add a left join to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function leftJoin($table, $first, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
        }
        
        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function leftJoinWhere($table, $one, $operator, $two){
            return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $one, $operator, $two);
        }
        
        /**
         * Add a right join to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function rightJoin($table, $first, $operator = null, $second = null){
            return \Illuminate\Database\Query\Builder::rightJoin($table, $first, $operator, $second);
        }
        
        /**
         * Add a "right join where" clause to the query.
         *
         * @param string $table
         * @param string $one
         * @param string $operator
         * @param string $two
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function rightJoinWhere($table, $one, $operator, $two){
            return \Illuminate\Database\Query\Builder::rightJoinWhere($table, $one, $operator, $two);
        }
        
        /**
         * Add a raw where clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
        }
        
        /**
         * Add a raw or where clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereRaw($sql, $bindings = array()){
            return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
        }
        
        /**
         * Add a where between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @param bool $not
         * @return $this 
         * @static 
         */
        public static function whereBetween($column, $values, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
        }
        
        /**
         * Add an or where between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereBetween($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
        }
        
        /**
         * Add a where not between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNotBetween($column, $values, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
        }
        
        /**
         * Add an or where not between statement to the query.
         *
         * @param string $column
         * @param array $values
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNotBetween($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
        }
        
        /**
         * Add a nested where statement to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNested($callback, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
        }
        
        /**
         * Add another query builder as a nested where to the query builder.
         *
         * @param \Illuminate\Database\Query\Builder|static $query
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function addNestedWhereQuery($query, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
        }
        
        /**
         * Add an exists clause to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @param bool $not
         * @return $this 
         * @static 
         */
        public static function whereExists($callback, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
        }
        
        /**
         * Add an or exists clause to the query.
         *
         * @param \Closure $callback
         * @param bool $not
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereExists($callback, $not = false){
            return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
        }
        
        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNotExists($callback, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
        }
        
        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNotExists($callback){
            return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
        }
        
        /**
         * Add a "where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @param bool $not
         * @return $this 
         * @static 
         */
        public static function whereIn($column, $values, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
        }
        
        /**
         * Add an "or where in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereIn($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
        }
        
        /**
         * Add a "where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNotIn($column, $values, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
        }
        
        /**
         * Add an "or where not in" clause to the query.
         *
         * @param string $column
         * @param mixed $values
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNotIn($column, $values){
            return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
        }
        
        /**
         * Add a "where null" clause to the query.
         *
         * @param string $column
         * @param string $boolean
         * @param bool $not
         * @return $this 
         * @static 
         */
        public static function whereNull($column, $boolean = 'and', $not = false){
            return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
        }
        
        /**
         * Add an "or where null" clause to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNull($column){
            return \Illuminate\Database\Query\Builder::orWhereNull($column);
        }
        
        /**
         * Add a "where not null" clause to the query.
         *
         * @param string $column
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereNotNull($column, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
        }
        
        /**
         * Add an "or where not null" clause to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orWhereNotNull($column){
            return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
        }
        
        /**
         * Add a "where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereDate($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereDate($column, $operator, $value, $boolean);
        }
        
        /**
         * Add a "where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereDay($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
        }
        
        /**
         * Add a "where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereMonth($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
        }
        
        /**
         * Add a "where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int $value
         * @param string $boolean
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function whereYear($column, $operator, $value, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
        }
        
        /**
         * Handles dynamic "where" clauses to the query.
         *
         * @param string $method
         * @param string $parameters
         * @return $this 
         * @static 
         */
        public static function dynamicWhere($method, $parameters){
            return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
        }
        
        /**
         * Add a "group by" clause to the query.
         *
         * @param array|string $column,...
         * @return $this 
         * @static 
         */
        public static function groupBy(){
            return \Illuminate\Database\Query\Builder::groupBy();
        }
        
        /**
         * Add a "having" clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param string $value
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function having($column, $operator = null, $value = null, $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::having($column, $operator, $value, $boolean);
        }
        
        /**
         * Add a "or having" clause to the query.
         *
         * @param string $column
         * @param string $operator
         * @param string $value
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orHaving($column, $operator = null, $value = null){
            return \Illuminate\Database\Query\Builder::orHaving($column, $operator, $value);
        }
        
        /**
         * Add a raw having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @param string $boolean
         * @return $this 
         * @static 
         */
        public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
            return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
        }
        
        /**
         * Add a raw or having clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function orHavingRaw($sql, $bindings = array()){
            return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
        }
        
        /**
         * Add an "order by" clause to the query.
         *
         * @param string $column
         * @param string $direction
         * @return $this 
         * @static 
         */
        public static function orderBy($column, $direction = 'asc'){
            return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
        }
        
        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function latest($column = 'created_at'){
            return \Illuminate\Database\Query\Builder::latest($column);
        }
        
        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string $column
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function oldest($column = 'created_at'){
            return \Illuminate\Database\Query\Builder::oldest($column);
        }
        
        /**
         * Add a raw "order by" clause to the query.
         *
         * @param string $sql
         * @param array $bindings
         * @return $this 
         * @static 
         */
        public static function orderByRaw($sql, $bindings = array()){
            return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
        }
        
        /**
         * Set the "offset" value of the query.
         *
         * @param int $value
         * @return $this 
         * @static 
         */
        public static function offset($value){
            return \Illuminate\Database\Query\Builder::offset($value);
        }
        
        /**
         * Alias to set the "offset" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function skip($value){
            return \Illuminate\Database\Query\Builder::skip($value);
        }
        
        /**
         * Set the "limit" value of the query.
         *
         * @param int $value
         * @return $this 
         * @static 
         */
        public static function limit($value){
            return \Illuminate\Database\Query\Builder::limit($value);
        }
        
        /**
         * Alias to set the "limit" value of the query.
         *
         * @param int $value
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function take($value){
            return \Illuminate\Database\Query\Builder::take($value);
        }
        
        /**
         * Set the limit and offset for a given page.
         *
         * @param int $page
         * @param int $perPage
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function forPage($page, $perPage = 15){
            return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
        }
        
        /**
         * Add a union statement to the query.
         *
         * @param \Illuminate\Database\Query\Builder|\Closure $query
         * @param bool $all
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function union($query, $all = false){
            return \Illuminate\Database\Query\Builder::union($query, $all);
        }
        
        /**
         * Add a union all statement to the query.
         *
         * @param \Illuminate\Database\Query\Builder|\Closure $query
         * @return \Illuminate\Database\Query\Builder|static 
         * @static 
         */
        public static function unionAll($query){
            return \Illuminate\Database\Query\Builder::unionAll($query);
        }
        
        /**
         * Lock the selected rows in the table.
         *
         * @param bool $value
         * @return $this 
         * @static 
         */
        public static function lock($value = true){
            return \Illuminate\Database\Query\Builder::lock($value);
        }
        
        /**
         * Lock the selected rows in the table for updating.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function lockForUpdate(){
            return \Illuminate\Database\Query\Builder::lockForUpdate();
        }
        
        /**
         * Share lock the selected rows in the table.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */
        public static function sharedLock(){
            return \Illuminate\Database\Query\Builder::sharedLock();
        }
        
        /**
         * Get the SQL representation of the query.
         *
         * @return string 
         * @static 
         */
        public static function toSql(){
            return \Illuminate\Database\Query\Builder::toSql();
        }
        
        /**
         * Execute the query as a fresh "select" statement.
         *
         * @param array $columns
         * @return array|static[] 
         * @static 
         */
        public static function getFresh($columns = array()){
            return \Illuminate\Database\Query\Builder::getFresh($columns);
        }
        
        /**
         * Get the count of the total records for the paginator.
         *
         * @param array $columns
         * @return int 
         * @static 
         */
        public static function getCountForPagination($columns = array()){
            return \Illuminate\Database\Query\Builder::getCountForPagination($columns);
        }
        
        /**
         * Concatenate values of a given column as a string.
         *
         * @param string $column
         * @param string $glue
         * @return string 
         * @static 
         */
        public static function implode($column, $glue = null){
            return \Illuminate\Database\Query\Builder::implode($column, $glue);
        }
        
        /**
         * Determine if any rows exist for the current query.
         *
         * @return bool 
         * @static 
         */
        public static function exists(){
            return \Illuminate\Database\Query\Builder::exists();
        }
        
        /**
         * Retrieve the "count" result of the query.
         *
         * @param string $columns
         * @return int 
         * @static 
         */
        public static function count($columns = '*'){
            return \Illuminate\Database\Query\Builder::count($columns);
        }
        
        /**
         * Retrieve the minimum value of a given column.
         *
         * @param string $column
         * @return float|int 
         * @static 
         */
        public static function min($column){
            return \Illuminate\Database\Query\Builder::min($column);
        }
        
        /**
         * Retrieve the maximum value of a given column.
         *
         * @param string $column
         * @return float|int 
         * @static 
         */
        public static function max($column){
            return \Illuminate\Database\Query\Builder::max($column);
        }
        
        /**
         * Retrieve the sum of the values of a given column.
         *
         * @param string $column
         * @return float|int 
         * @static 
         */
        public static function sum($column){
            return \Illuminate\Database\Query\Builder::sum($column);
        }
        
        /**
         * Retrieve the average of the values of a given column.
         *
         * @param string $column
         * @return float|int 
         * @static 
         */
        public static function avg($column){
            return \Illuminate\Database\Query\Builder::avg($column);
        }
        
        /**
         * Execute an aggregate function on the database.
         *
         * @param string $function
         * @param array $columns
         * @return float|int 
         * @static 
         */
        public static function aggregate($function, $columns = array()){
            return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
        }
        
        /**
         * Insert a new record into the database.
         *
         * @param array $values
         * @return bool 
         * @static 
         */
        public static function insert($values){
            return \Illuminate\Database\Query\Builder::insert($values);
        }
        
        /**
         * Insert a new record and get the value of the primary key.
         *
         * @param array $values
         * @param string $sequence
         * @return int 
         * @static 
         */
        public static function insertGetId($values, $sequence = null){
            return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
        }
        
        /**
         * Run a truncate statement on the table.
         *
         * @return void 
         * @static 
         */
        public static function truncate(){
            \Illuminate\Database\Query\Builder::truncate();
        }
        
        /**
         * Merge an array of where clauses and bindings.
         *
         * @param array $wheres
         * @param array $bindings
         * @return void 
         * @static 
         */
        public static function mergeWheres($wheres, $bindings){
            \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
        }
        
        /**
         * Create a raw database expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */
        public static function raw($value){
            return \Illuminate\Database\Query\Builder::raw($value);
        }
        
        /**
         * Get the current query value bindings in a flattened array.
         *
         * @return array 
         * @static 
         */
        public static function getBindings(){
            return \Illuminate\Database\Query\Builder::getBindings();
        }
        
        /**
         * Get the raw array of bindings.
         *
         * @return array 
         * @static 
         */
        public static function getRawBindings(){
            return \Illuminate\Database\Query\Builder::getRawBindings();
        }
        
        /**
         * Set the bindings on the query builder.
         *
         * @param array $bindings
         * @param string $type
         * @return $this 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function setBindings($bindings, $type = 'where'){
            return \Illuminate\Database\Query\Builder::setBindings($bindings, $type);
        }
        
        /**
         * Add a binding to the query.
         *
         * @param mixed $value
         * @param string $type
         * @return $this 
         * @throws \InvalidArgumentException
         * @static 
         */
        public static function addBinding($value, $type = 'where'){
            return \Illuminate\Database\Query\Builder::addBinding($value, $type);
        }
        
        /**
         * Merge an array of bindings into our bindings.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @return $this 
         * @static 
         */
        public static function mergeBindings($query){
            return \Illuminate\Database\Query\Builder::mergeBindings($query);
        }
        
        /**
         * Get the database query processor instance.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */
        public static function getProcessor(){
            return \Illuminate\Database\Query\Builder::getProcessor();
        }
        
        /**
         * Get the query grammar instance.
         *
         * @return \Illuminate\Database\Grammar 
         * @static 
         */
        public static function getGrammar(){
            return \Illuminate\Database\Query\Builder::getGrammar();
        }
        
        /**
         * Use the write pdo for query.
         *
         * @return $this 
         * @static 
         */
        public static function useWritePdo(){
            return \Illuminate\Database\Query\Builder::useWritePdo();
        }
        
    }


    class Event extends \Illuminate\Support\Facades\Event{
        
        /**
         * 
         *
         * @static 
         */
        public static function listen($events, $listener, $priority = 0){
            return \Illuminate\Events\Dispatcher::listen($events, $listener, $priority);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasListeners($eventName){
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function push($event, $payload = array()){
            return \Illuminate\Events\Dispatcher::push($event, $payload);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subscribe($subscriber){
            return \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function until($event, $payload = array()){
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush($event){
            return \Illuminate\Events\Dispatcher::flush($event);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function firing(){
            return \Illuminate\Events\Dispatcher::firing();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fire($event, $payload = array(), $halt = false){
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getListeners($eventName){
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function makeListener($listener){
            return \Illuminate\Events\Dispatcher::makeListener($listener);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createClassListener($listener){
            return \Illuminate\Events\Dispatcher::createClassListener($listener);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($event){
            return \Illuminate\Events\Dispatcher::forget($event);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forgetPushed(){
            return \Illuminate\Events\Dispatcher::forgetPushed();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setQueueResolver($resolver){
            return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
        }
        
    }


    class File extends \Illuminate\Support\Facades\File{
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($path){
            return \Illuminate\Filesystem\Filesystem::exists($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($path){
            return \Illuminate\Filesystem\Filesystem::get($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequire($path){
            return \Illuminate\Filesystem\Filesystem::getRequire($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function requireOnce($file){
            return \Illuminate\Filesystem\Filesystem::requireOnce($file);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($path, $contents, $lock = false){
            return \Illuminate\Filesystem\Filesystem::put($path, $contents, $lock);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prepend($path, $data){
            return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function append($path, $data){
            return \Illuminate\Filesystem\Filesystem::append($path, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function delete($paths){
            return \Illuminate\Filesystem\Filesystem::delete($paths);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function move($path, $target){
            return \Illuminate\Filesystem\Filesystem::move($path, $target);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function copy($path, $target){
            return \Illuminate\Filesystem\Filesystem::copy($path, $target);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function name($path){
            return \Illuminate\Filesystem\Filesystem::name($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extension($path){
            return \Illuminate\Filesystem\Filesystem::extension($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function type($path){
            return \Illuminate\Filesystem\Filesystem::type($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mimeType($path){
            return \Illuminate\Filesystem\Filesystem::mimeType($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function size($path){
            return \Illuminate\Filesystem\Filesystem::size($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lastModified($path){
            return \Illuminate\Filesystem\Filesystem::lastModified($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isWritable($path){
            return \Illuminate\Filesystem\Filesystem::isWritable($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isFile($file){
            return \Illuminate\Filesystem\Filesystem::isFile($file);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function glob($pattern, $flags = 0){
            return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function files($directory){
            return \Illuminate\Filesystem\Filesystem::files($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function allFiles($directory){
            return \Illuminate\Filesystem\Filesystem::allFiles($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function directories($directory){
            return \Illuminate\Filesystem\Filesystem::directories($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false){
            return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function copyDirectory($directory, $destination, $options = null){
            return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function deleteDirectory($directory, $preserve = false){
            return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cleanDirectory($directory){
            return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }
        
    }


    class Hash extends \Illuminate\Support\Facades\Hash{
        
        /**
         * 
         *
         * @static 
         */
        public static function make($value, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::make($value, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function check($value, $hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function needsRehash($hashedValue, $options = array()){
            return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRounds($rounds){
            return \Illuminate\Hashing\BcryptHasher::setRounds($rounds);
        }
        
    }


    class Input extends \Illuminate\Support\Facades\Input{
        
        /**
         * 
         *
         * @static 
         */
        public static function capture(){
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function instance(){
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function method(){
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function root(){
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function url(){
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fullUrl(){
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function path(){
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decodedPath(){
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segment($index, $default = null){
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segments(){
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function is(){
            return \Illuminate\Http\Request::is();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ajax(){
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pjax(){
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secure(){
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ip(){
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ips(){
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($key){
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key){
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Http\Request::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function input($key = null, $default = null){
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function only($keys){
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function except($keys){
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function query($key = null, $default = null){
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasCookie($key){
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cookie($key = null, $default = null){
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function file($key = null, $default = null){
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasFile($key){
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function header($key = null, $default = null){
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function server($key = null, $default = null){
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function old($key = null, $default = null){
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flash($filter = null, $keys = array()){
            return \Illuminate\Http\Request::flash($filter, $keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashOnly($keys){
            return \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashExcept($keys){
            return \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Http\Request::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function merge($input){
            return \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function replace($input){
            return \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function json($key = null, $default = null){
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isJson(){
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function wantsJson(){
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function format($default = 'html'){
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromBase($request){
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function session(){
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function user(){
            return \Illuminate\Http\Request::user();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function route(){
            return \Illuminate\Http\Request::route();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserResolver(){
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setUserResolver($callback){
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRouteResolver(){
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRouteResolver($callback){
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($offset){
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($offset){
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($offset, $value){
            return \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($offset){
            return \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFactory($callable){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function overrideGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedProxies($proxies){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedProxies(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHosts($hostPatterns){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHosts(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHeaderName($key, $value){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHeaderName($key){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function normalizeQueryString($qs){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function enableHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $default = null, $deep = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default, $deep);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasPreviousSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSession($session){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIps(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIp(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScriptName(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPathInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBasePath(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBaseUrl(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScheme(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPort(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUser(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPassword(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSchemeAndHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueryString(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isSecure(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRealMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMimeType($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFormat($mimeType){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFormat($format, $mimeTypes){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestFormat($default = 'html'){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequestFormat($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContentType(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethodSafe(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContent($asResource = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getETags(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isNoCache(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPreferredLanguage($locales = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLanguages(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCharsets(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEncodings(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getAcceptableContentTypes(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isXmlHttpRequest(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
    }


    class Inspiring extends \Illuminate\Foundation\Inspiring{
        
    }


    class Lang extends \Illuminate\Support\Facades\Lang{
        
        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string $locale
         * @return bool 
         * @static 
         */
        public static function has($key, $locale = null){
            return \Illuminate\Translation\Translator::has($key, $locale);
        }
        
        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function get($key, $replace = array(), $locale = null){
            return \Illuminate\Translation\Translator::get($key, $replace, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function choice($key, $number, $replace = array(), $locale = null){
            return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
        }
        
        /**
         * Get the translation for a given key.
         *
         * @param string $id
         * @param array $parameters
         * @param string $domain
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
            return \Illuminate\Translation\Translator::trans($id, $parameters, $domain, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $id
         * @param int $number
         * @param array $parameters
         * @param string $domain
         * @param string $locale
         * @return string 
         * @static 
         */
        public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
            return \Illuminate\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
        }
        
        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void 
         * @static 
         */
        public static function load($namespace, $group, $locale){
            \Illuminate\Translation\Translator::load($namespace, $group, $locale);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */
        public static function addNamespace($namespace, $hint){
            \Illuminate\Translation\Translator::addNamespace($namespace, $hint);
        }
        
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */
        public static function parseKey($key){
            return \Illuminate\Translation\Translator::parseKey($key);
        }
        
        /**
         * Get the message selector instance.
         *
         * @return \Symfony\Component\Translation\MessageSelector 
         * @static 
         */
        public static function getSelector(){
            return \Illuminate\Translation\Translator::getSelector();
        }
        
        /**
         * Set the message selector instance.
         *
         * @param \Symfony\Component\Translation\MessageSelector $selector
         * @return void 
         * @static 
         */
        public static function setSelector($selector){
            \Illuminate\Translation\Translator::setSelector($selector);
        }
        
        /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Translation\LoaderInterface 
         * @static 
         */
        public static function getLoader(){
            return \Illuminate\Translation\Translator::getLoader();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */
        public static function locale(){
            return \Illuminate\Translation\Translator::locale();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */
        public static function getLocale(){
            return \Illuminate\Translation\Translator::getLocale();
        }
        
        /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */
        public static function setLocale($locale){
            \Illuminate\Translation\Translator::setLocale($locale);
        }
        
        /**
         * Get the fallback locale being used.
         *
         * @return string 
         * @static 
         */
        public static function getFallback(){
            return \Illuminate\Translation\Translator::getFallback();
        }
        
        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void 
         * @static 
         */
        public static function setFallback($fallback){
            \Illuminate\Translation\Translator::setFallback($fallback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setParsedKey($key, $parsed){
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            return \Illuminate\Translation\Translator::setParsedKey($key, $parsed);
        }
        
    }


    class Log extends \Illuminate\Support\Facades\Log{
        
        /**
         * 
         *
         * @static 
         */
        public static function debug($message, $context = array()){
            return \Monolog\Logger::debug($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function info($message, $context = array()){
            return \Monolog\Logger::info($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function notice($message, $context = array()){
            return \Monolog\Logger::notice($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function warning($message, $context = array()){
            return \Monolog\Logger::warning($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function error($message, $context = array()){
            return \Monolog\Logger::error($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function critical($message, $context = array()){
            return \Monolog\Logger::critical($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alert($message, $context = array()){
            return \Monolog\Logger::alert($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function emergency($message, $context = array()){
            return \Monolog\Logger::emergency($message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function log($level, $message, $context = array()){
            return \Illuminate\Log\Writer::log($level, $message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function write($level, $message, $context = array()){
            return \Illuminate\Log\Writer::write($level, $message, $context);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useFiles($path, $level = 'debug'){
            return \Illuminate\Log\Writer::useFiles($path, $level);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useDailyFiles($path, $days = 0, $level = 'debug'){
            return \Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useSyslog($name = 'laravel', $level = 'debug'){
            return \Illuminate\Log\Writer::useSyslog($name, $level);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function useErrorLog($level = 'debug', $messageType = 0){
            return \Illuminate\Log\Writer::useErrorLog($level, $messageType);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function listen($callback){
            return \Illuminate\Log\Writer::listen($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMonolog(){
            return \Illuminate\Log\Writer::getMonolog();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEventDispatcher(){
            return \Illuminate\Log\Writer::getEventDispatcher();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setEventDispatcher($dispatcher){
            return \Illuminate\Log\Writer::setEventDispatcher($dispatcher);
        }
        
    }


    class Mail extends \Illuminate\Support\Facades\Mail{
        
        /**
         * Set the global from address and name.
         *
         * @param string $address
         * @param string $name
         * @return void 
         * @static 
         */
        public static function alwaysFrom($address, $name = null){
            \Illuminate\Mail\Mailer::alwaysFrom($address, $name);
        }
        
        /**
         * Send a new message when only a raw text part.
         *
         * @param string $text
         * @param mixed $callback
         * @return int 
         * @static 
         */
        public static function raw($text, $callback){
            return \Illuminate\Mail\Mailer::raw($text, $callback);
        }
        
        /**
         * Send a new message when only a plain part.
         *
         * @param string $view
         * @param array $data
         * @param mixed $callback
         * @return int 
         * @static 
         */
        public static function plain($view, $data, $callback){
            return \Illuminate\Mail\Mailer::plain($view, $data, $callback);
        }
        
        /**
         * Send a new message using a view.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function send($view, $data, $callback){
            return \Illuminate\Mail\Mailer::send($view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function queue($view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function queueOn($queue, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function later($delay, $view, $data, $callback, $queue = null){
            return \Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds on the given queue.
         *
         * @param string $queue
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */
        public static function laterOn($queue, $delay, $view, $data, $callback){
            return \Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
        }
        
        /**
         * Handle a queued e-mail message job.
         *
         * @param \Illuminate\Contracts\Queue\Job $job
         * @param array $data
         * @return void 
         * @static 
         */
        public static function handleQueuedMessage($job, $data){
            \Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
        }
        
        /**
         * Tell the mailer to not really send messages.
         *
         * @param bool $value
         * @return void 
         * @static 
         */
        public static function pretend($value = true){
            \Illuminate\Mail\Mailer::pretend($value);
        }
        
        /**
         * Check if the mailer is pretending to send messages.
         *
         * @return bool 
         * @static 
         */
        public static function isPretending(){
            return \Illuminate\Mail\Mailer::isPretending();
        }
        
        /**
         * Get the view factory instance.
         *
         * @return \Illuminate\Contracts\View\Factory 
         * @static 
         */
        public static function getViewFactory(){
            return \Illuminate\Mail\Mailer::getViewFactory();
        }
        
        /**
         * Get the Swift Mailer instance.
         *
         * @return \Swift_Mailer 
         * @static 
         */
        public static function getSwiftMailer(){
            return \Illuminate\Mail\Mailer::getSwiftMailer();
        }
        
        /**
         * Get the array of failed recipients.
         *
         * @return array 
         * @static 
         */
        public static function failures(){
            return \Illuminate\Mail\Mailer::failures();
        }
        
        /**
         * Set the Swift Mailer instance.
         *
         * @param \Swift_Mailer $swift
         * @return void 
         * @static 
         */
        public static function setSwiftMailer($swift){
            \Illuminate\Mail\Mailer::setSwiftMailer($swift);
        }
        
        /**
         * Set the log writer instance.
         *
         * @param \Psr\Log\LoggerInterface $logger
         * @return $this 
         * @static 
         */
        public static function setLogger($logger){
            return \Illuminate\Mail\Mailer::setLogger($logger);
        }
        
        /**
         * Set the queue manager instance.
         *
         * @param \Illuminate\Contracts\Queue\Queue $queue
         * @return $this 
         * @static 
         */
        public static function setQueue($queue){
            return \Illuminate\Mail\Mailer::setQueue($queue);
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setContainer($container){
            \Illuminate\Mail\Mailer::setContainer($container);
        }
        
    }


    class Password extends \Illuminate\Support\Facades\Password{
        
        /**
         * Send a password reset link to a user.
         *
         * @param array $credentials
         * @param \Closure|null $callback
         * @return string 
         * @static 
         */
        public static function sendResetLink($credentials, $callback = null){
            return \Illuminate\Auth\Passwords\PasswordBroker::sendResetLink($credentials, $callback);
        }
        
        /**
         * Send the password reset link via e-mail.
         *
         * @param \Illuminate\Contracts\Auth\CanResetPassword $user
         * @param string $token
         * @param \Closure|null $callback
         * @return int 
         * @static 
         */
        public static function emailResetLink($user, $token, $callback = null){
            return \Illuminate\Auth\Passwords\PasswordBroker::emailResetLink($user, $token, $callback);
        }
        
        /**
         * Reset the password for the given token.
         *
         * @param array $credentials
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */
        public static function reset($credentials, $callback){
            return \Illuminate\Auth\Passwords\PasswordBroker::reset($credentials, $callback);
        }
        
        /**
         * Set a custom password validator.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */
        public static function validator($callback){
            \Illuminate\Auth\Passwords\PasswordBroker::validator($callback);
        }
        
        /**
         * Determine if the passwords match for the request.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */
        public static function validateNewPassword($credentials){
            return \Illuminate\Auth\Passwords\PasswordBroker::validateNewPassword($credentials);
        }
        
        /**
         * Get the user for the given credentials.
         *
         * @param array $credentials
         * @return \Illuminate\Contracts\Auth\CanResetPassword 
         * @throws \UnexpectedValueException
         * @static 
         */
        public static function getUser($credentials){
            return \Illuminate\Auth\Passwords\PasswordBroker::getUser($credentials);
        }
        
    }


    class Queue extends \Illuminate\Support\Facades\Queue{
        
        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function looping($callback){
            \Illuminate\Queue\QueueManager::looping($callback);
        }
        
        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function failing($callback){
            \Illuminate\Queue\QueueManager::failing($callback);
        }
        
        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */
        public static function stopping($callback){
            \Illuminate\Queue\QueueManager::stopping($callback);
        }
        
        /**
         * Determine if the driver is connected.
         *
         * @param string $name
         * @return bool 
         * @static 
         */
        public static function connected($name = null){
            return \Illuminate\Queue\QueueManager::connected($name);
        }
        
        /**
         * Resolve a queue connection instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Queue\Queue 
         * @static 
         */
        public static function connection($name = null){
            return \Illuminate\Queue\QueueManager::connection($name);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function extend($driver, $resolver){
            \Illuminate\Queue\QueueManager::extend($driver, $resolver);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function addConnector($driver, $resolver){
            \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
        }
        
        /**
         * Get the name of the default queue connection.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Queue\QueueManager::getDefaultDriver();
        }
        
        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void 
         * @static 
         */
        public static function setDefaultDriver($name){
            \Illuminate\Queue\QueueManager::setDefaultDriver($name);
        }
        
        /**
         * Get the full name for the given connection.
         *
         * @param string $connection
         * @return string 
         * @static 
         */
        public static function getName($connection = null){
            return \Illuminate\Queue\QueueManager::getName($connection);
        }
        
        /**
         * Determine if the application is in maintenance mode.
         *
         * @return bool 
         * @static 
         */
        public static function isDownForMaintenance(){
            return \Illuminate\Queue\QueueManager::isDownForMaintenance();
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function push($job, $data = '', $queue = null){
            return \Illuminate\Queue\SyncQueue::push($job, $data, $queue);
        }
        
        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string $queue
         * @param array $options
         * @return mixed 
         * @static 
         */
        public static function pushRaw($payload, $queue = null, $options = array()){
            return \Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param \DateTime|int $delay
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function later($delay, $job, $data = '', $queue = null){
            return \Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
        }
        
        /**
         * Pop the next job off of the queue.
         *
         * @param string $queue
         * @return \Illuminate\Contracts\Queue\Job|null 
         * @static 
         */
        public static function pop($queue = null){
            return \Illuminate\Queue\SyncQueue::pop($queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */
        public static function pushOn($queue, $job, $data = ''){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::pushOn($queue, $job, $data);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param string $queue
         * @param \DateTime|int $delay
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */
        public static function laterOn($queue, $delay, $job, $data = ''){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::laterOn($queue, $delay, $job, $data);
        }
        
        /**
         * Marshal a push queue request and fire the job.
         *
         * @throws \RuntimeException
         * @static 
         */
        public static function marshal(){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::marshal();
        }
        
        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */
        public static function bulk($jobs, $data = '', $queue = null){
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void 
         * @static 
         */
        public static function setContainer($container){
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setContainer($container);
        }
        
        /**
         * Set the encrypter instance.
         *
         * @param \Illuminate\Contracts\Encryption\Encrypter $crypt
         * @return void 
         * @static 
         */
        public static function setEncrypter($crypt){
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setEncrypter($crypt);
        }
        
    }


    class Redirect extends \Illuminate\Support\Facades\Redirect{
        
        /**
         * Create a new redirect response to the "home" route.
         *
         * @param int $status
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function home($status = 302){
            return \Illuminate\Routing\Redirector::home($status);
        }
        
        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function back($status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::back($status, $headers);
        }
        
        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function refresh($status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::refresh($status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function guest($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function intended($default = '/', $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function to($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function away($path, $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::away($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function secure($path, $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function route($route, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */
        public static function action($action, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
        }
        
        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */
        public static function getUrlGenerator(){
            return \Illuminate\Routing\Redirector::getUrlGenerator();
        }
        
        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         * @return void 
         * @static 
         */
        public static function setSession($session){
            \Illuminate\Routing\Redirector::setSession($session);
        }
        
    }


    class Request extends \Illuminate\Support\Facades\Request{
        
        /**
         * 
         *
         * @static 
         */
        public static function capture(){
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function instance(){
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function method(){
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function root(){
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function url(){
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function fullUrl(){
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function path(){
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decodedPath(){
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segment($index, $default = null){
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function segments(){
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function is(){
            return \Illuminate\Http\Request::is();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ajax(){
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pjax(){
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secure(){
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ip(){
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ips(){
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($key){
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($key){
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Http\Request::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function input($key = null, $default = null){
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function only($keys){
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function except($keys){
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function query($key = null, $default = null){
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasCookie($key){
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function cookie($key = null, $default = null){
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function file($key = null, $default = null){
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasFile($key){
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function header($key = null, $default = null){
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function server($key = null, $default = null){
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function old($key = null, $default = null){
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flash($filter = null, $keys = array()){
            return \Illuminate\Http\Request::flash($filter, $keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashOnly($keys){
            return \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashExcept($keys){
            return \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Http\Request::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function merge($input){
            return \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function replace($input){
            return \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function json($key = null, $default = null){
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isJson(){
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function wantsJson(){
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function format($default = 'html'){
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromBase($request){
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function session(){
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function user(){
            return \Illuminate\Http\Request::user();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function route(){
            return \Illuminate\Http\Request::route();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserResolver(){
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setUserResolver($callback){
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRouteResolver(){
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRouteResolver($callback){
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($offset){
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($offset){
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($offset, $value){
            return \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($offset){
            return \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFactory($callable){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function overrideGlobals(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedProxies($proxies){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedProxies(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHosts($hostPatterns){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHosts(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTrustedHeaderName($key, $value){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTrustedHeaderName($key){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function normalizeQueryString($qs){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function enableHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpMethodParameterOverride(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($key, $default = null, $deep = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default, $deep);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasPreviousSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasSession(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSession($session){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIps(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getClientIp(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScriptName(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPathInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBasePath(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBaseUrl(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getScheme(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPort(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUser(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPassword(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUserInfo(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSchemeAndHttpHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUri(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getUriForPath($path){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getQueryString(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isSecure(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHost(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRealMethod(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMimeType($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFormat($mimeType){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFormat($format, $mimeTypes){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequestFormat($default = 'html'){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequestFormat($format){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContentType(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethod($method){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isMethodSafe(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContent($asResource = false){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getETags(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isNoCache(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPreferredLanguage($locales = null){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLanguages(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCharsets(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEncodings(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getAcceptableContentTypes(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isXmlHttpRequest(){
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
    }


    class Response extends \Illuminate\Support\Facades\Response{
        
        /**
         * Return a new response from the application.
         *
         * @param string $content
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function make($content = '', $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }
        
        /**
         * Return a new view response from the application.
         *
         * @param string $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function view($view, $data = array(), $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }
        
        /**
         * Return a new JSON response from the application.
         *
         * @param string|array $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function json($data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }
        
        /**
         * Return a new JSONP response from the application.
         *
         * @param string $callback
         * @param string|array $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function jsonp($callback, $data = array(), $status = 200, $headers = array(), $options = 0){
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }
        
        /**
         * Return a new streamed response from the application.
         *
         * @param \Closure $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */
        public static function stream($callback, $status = 200, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }
        
        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string $name
         * @param array $headers
         * @param null|string $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */
        public static function download($file, $name = null, $headers = array(), $disposition = 'attachment'){
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectTo($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectToRoute($route, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectToAction($action, $parameters = array(), $status = 302, $headers = array()){
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function redirectToIntended($default = '/', $status = 302, $headers = array(), $secure = null){
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
        
    }


    class Route extends \Illuminate\Support\Facades\Route{
        
        /**
         * 
         *
         * @static 
         */
        public static function get($uri, $action){
            return \Illuminate\Routing\Router::get($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function post($uri, $action){
            return \Illuminate\Routing\Router::post($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($uri, $action){
            return \Illuminate\Routing\Router::put($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function patch($uri, $action){
            return \Illuminate\Routing\Router::patch($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function delete($uri, $action){
            return \Illuminate\Routing\Router::delete($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function options($uri, $action){
            return \Illuminate\Routing\Router::options($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function any($uri, $action){
            return \Illuminate\Routing\Router::any($uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function match($methods, $uri, $action){
            return \Illuminate\Routing\Router::match($methods, $uri, $action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function controllers($controllers){
            return \Illuminate\Routing\Router::controllers($controllers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function controller($uri, $controller, $names = array()){
            return \Illuminate\Routing\Router::controller($uri, $controller, $names);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resources($resources){
            return \Illuminate\Routing\Router::resources($resources);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resource($name, $controller, $options = array()){
            return \Illuminate\Routing\Router::resource($name, $controller, $options);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function group($attributes, $callback){
            return \Illuminate\Routing\Router::group($attributes, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mergeWithLastGroup($new){
            return \Illuminate\Routing\Router::mergeWithLastGroup($new);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function mergeGroup($new, $old){
            return \Illuminate\Routing\Router::mergeGroup($new, $old);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLastGroupPrefix(){
            return \Illuminate\Routing\Router::getLastGroupPrefix();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatch($request){
            return \Illuminate\Routing\Router::dispatch($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function dispatchToRoute($request){
            return \Illuminate\Routing\Router::dispatchToRoute($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function gatherRouteMiddlewares($route){
            return \Illuminate\Routing\Router::gatherRouteMiddlewares($route);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function matched($callback){
            return \Illuminate\Routing\Router::matched($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function before($callback){
            return \Illuminate\Routing\Router::before($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function after($callback){
            return \Illuminate\Routing\Router::after($callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMiddleware(){
            return \Illuminate\Routing\Router::getMiddleware();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function middleware($name, $class){
            return \Illuminate\Routing\Router::middleware($name, $class);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function filter($name, $callback){
            return \Illuminate\Routing\Router::filter($name, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function when($pattern, $name, $methods = null){
            return \Illuminate\Routing\Router::when($pattern, $name, $methods);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function whenRegex($pattern, $name, $methods = null){
            return \Illuminate\Routing\Router::whenRegex($pattern, $name, $methods);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function model($key, $class, $callback = null){
            return \Illuminate\Routing\Router::model($key, $class, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function bind($key, $binder){
            return \Illuminate\Routing\Router::bind($key, $binder);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createClassBinding($binding){
            return \Illuminate\Routing\Router::createClassBinding($binding);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pattern($key, $pattern){
            return \Illuminate\Routing\Router::pattern($key, $pattern);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function patterns($patterns){
            return \Illuminate\Routing\Router::patterns($patterns);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callRouteBefore($route, $request){
            return \Illuminate\Routing\Router::callRouteBefore($route, $request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function findPatternFilters($request){
            return \Illuminate\Routing\Router::findPatternFilters($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callRouteAfter($route, $request, $response){
            return \Illuminate\Routing\Router::callRouteAfter($route, $request, $response);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callRouteFilter($filter, $parameters, $route, $request, $response = null){
            return \Illuminate\Routing\Router::callRouteFilter($filter, $parameters, $route, $request, $response);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasGroupStack(){
            return \Illuminate\Routing\Router::hasGroupStack();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getGroupStack(){
            return \Illuminate\Routing\Router::getGroupStack();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function input($key, $default = null){
            return \Illuminate\Routing\Router::input($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCurrentRoute(){
            return \Illuminate\Routing\Router::getCurrentRoute();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function current(){
            return \Illuminate\Routing\Router::current();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($name){
            return \Illuminate\Routing\Router::has($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteName(){
            return \Illuminate\Routing\Router::currentRouteName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function is(){
            return \Illuminate\Routing\Router::is();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteNamed($name){
            return \Illuminate\Routing\Router::currentRouteNamed($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteAction(){
            return \Illuminate\Routing\Router::currentRouteAction();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function uses(){
            return \Illuminate\Routing\Router::uses();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function currentRouteUses($action){
            return \Illuminate\Routing\Router::currentRouteUses($action);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getCurrentRequest(){
            return \Illuminate\Routing\Router::getCurrentRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRoutes(){
            return \Illuminate\Routing\Router::getRoutes();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRoutes($routes){
            return \Illuminate\Routing\Router::setRoutes($routes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getPatterns(){
            return \Illuminate\Routing\Router::getPatterns();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Routing\Router::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Routing\Router::hasMacro($name);
        }
        
    }


    class Schema extends \Illuminate\Support\Facades\Schema{
        
        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool 
         * @static 
         */
        public static function hasTable($table){
            return \Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
        }
        
        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array 
         * @static 
         */
        public static function getColumnListing($table){
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnListing($table);
        }
        
        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool 
         * @static 
         */
        public static function hasColumn($table, $column){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
        }
        
        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool 
         * @static 
         */
        public static function hasColumns($table, $columns){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumns($table, $columns);
        }
        
        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function table($table, $callback){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
        }
        
        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function create($table, $callback){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
        }
        
        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function drop($table){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::drop($table);
        }
        
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function dropIfExists($table){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
        }
        
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return \Illuminate\Database\Schema\Blueprint 
         * @static 
         */
        public static function rename($from, $to){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
        }
        
        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */
        public static function getConnection(){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getConnection();
        }
        
        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection
         * @return $this 
         * @static 
         */
        public static function setConnection($connection){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
        }
        
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function blueprintResolver($resolver){
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::blueprintResolver($resolver);
        }
        
    }


    class Session extends \Illuminate\Support\Facades\Session{
        
        /**
         * 
         *
         * @static 
         */
        public static function getSessionConfig(){
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDefaultDriver($name){
            return \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function start(){
            return \Illuminate\Session\Store::start();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getId(){
            return \Illuminate\Session\Store::getId();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setId($id){
            return \Illuminate\Session\Store::setId($id);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isValidId($id){
            return \Illuminate\Session\Store::isValidId($id);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getName(){
            return \Illuminate\Session\Store::getName();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setName($name){
            return \Illuminate\Session\Store::setName($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function invalidate($lifetime = null){
            return \Illuminate\Session\Store::invalidate($lifetime);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function migrate($destroy = false, $lifetime = null){
            return \Illuminate\Session\Store::migrate($destroy, $lifetime);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function regenerate($destroy = false){
            return \Illuminate\Session\Store::regenerate($destroy);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function save(){
            return \Illuminate\Session\Store::save();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ageFlashData(){
            return \Illuminate\Session\Store::ageFlashData();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function has($name){
            return \Illuminate\Session\Store::has($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function get($name, $default = null){
            return \Illuminate\Session\Store::get($name, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function pull($key, $default = null){
            return \Illuminate\Session\Store::pull($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasOldInput($key = null){
            return \Illuminate\Session\Store::hasOldInput($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getOldInput($key = null, $default = null){
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function set($name, $value){
            return \Illuminate\Session\Store::set($name, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function put($key, $value = null){
            return \Illuminate\Session\Store::put($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function push($key, $value){
            return \Illuminate\Session\Store::push($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flash($key, $value){
            return \Illuminate\Session\Store::flash($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flashInput($value){
            return \Illuminate\Session\Store::flashInput($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function reflash(){
            return \Illuminate\Session\Store::reflash();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function keep($keys = null){
            return \Illuminate\Session\Store::keep($keys);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function all(){
            return \Illuminate\Session\Store::all();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function replace($attributes){
            return \Illuminate\Session\Store::replace($attributes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function remove($name){
            return \Illuminate\Session\Store::remove($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forget($key){
            return \Illuminate\Session\Store::forget($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function clear(){
            return \Illuminate\Session\Store::clear();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flush(){
            return \Illuminate\Session\Store::flush();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isStarted(){
            return \Illuminate\Session\Store::isStarted();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function registerBag($bag){
            return \Illuminate\Session\Store::registerBag($bag);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBag($name){
            return \Illuminate\Session\Store::getBag($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getMetadataBag(){
            return \Illuminate\Session\Store::getMetadataBag();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getBagData($name){
            return \Illuminate\Session\Store::getBagData($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function token(){
            return \Illuminate\Session\Store::token();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getToken(){
            return \Illuminate\Session\Store::getToken();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function regenerateToken(){
            return \Illuminate\Session\Store::regenerateToken();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function previousUrl(){
            return \Illuminate\Session\Store::previousUrl();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setPreviousUrl($url){
            return \Illuminate\Session\Store::setPreviousUrl($url);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setExists($value){
            return \Illuminate\Session\Store::setExists($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getHandler(){
            return \Illuminate\Session\Store::getHandler();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function handlerNeedsRequest(){
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequestOnHandler($request){
            return \Illuminate\Session\Store::setRequestOnHandler($request);
        }
        
    }


    class Storage extends \Illuminate\Support\Facades\Storage{
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function drive($name = null){
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function disk($name = null){
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
        
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Filesystem 
         * @static 
         */
        public static function createLocalDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
        
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */
        public static function createS3Driver($config){
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
        
        /**
         * Create an instance of the Rackspace driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */
        public static function createRackspaceDriver($config){
            return \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver($config);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */
        public static function getDefaultDriver(){
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */
        public static function extend($driver, $callback){
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
        
    }


    class URL extends \Illuminate\Support\Facades\URL{
        
        /**
         * 
         *
         * @static 
         */
        public static function full(){
            return \Illuminate\Routing\UrlGenerator::full();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function current(){
            return \Illuminate\Routing\UrlGenerator::current();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function previous(){
            return \Illuminate\Routing\UrlGenerator::previous();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function to($path, $extra = array(), $secure = null){
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secure($path, $parameters = array()){
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function asset($path, $secure = null){
            return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secureAsset($path){
            return \Illuminate\Routing\UrlGenerator::secureAsset($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forceSchema($schema){
            return \Illuminate\Routing\UrlGenerator::forceSchema($schema);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function route($name, $parameters = array(), $absolute = true){
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function action($action, $parameters = array(), $absolute = true){
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function forceRootUrl($root){
            return \Illuminate\Routing\UrlGenerator::forceRootUrl($root);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isValidUrl($path){
            return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getRequest(){
            return \Illuminate\Routing\UrlGenerator::getRequest();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRequest($request){
            return \Illuminate\Routing\UrlGenerator::setRequest($request);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRoutes($routes){
            return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setSessionResolver($sessionResolver){
            return \Illuminate\Routing\UrlGenerator::setSessionResolver($sessionResolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setRootControllerNamespace($rootNamespace){
            return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
        }
        
    }


    class Validator extends \Illuminate\Support\Facades\Validator{
        
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator 
         * @static 
         */
        public static function make($data, $rules, $messages = array(), $customAttributes = array()){
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */
        public static function extend($rule, $extension, $message = null){
            \Illuminate\Validation\Factory::extend($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */
        public static function extendImplicit($rule, $extension, $message = null){
            \Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void 
         * @static 
         */
        public static function replacer($rule, $replacer){
            \Illuminate\Validation\Factory::replacer($rule, $replacer);
        }
        
        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */
        public static function resolver($resolver){
            \Illuminate\Validation\Factory::resolver($resolver);
        }
        
        /**
         * Get the Translator implementation.
         *
         * @return \Symfony\Component\Translation\TranslatorInterface 
         * @static 
         */
        public static function getTranslator(){
            return \Illuminate\Validation\Factory::getTranslator();
        }
        
        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface 
         * @static 
         */
        public static function getPresenceVerifier(){
            return \Illuminate\Validation\Factory::getPresenceVerifier();
        }
        
        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void 
         * @static 
         */
        public static function setPresenceVerifier($presenceVerifier){
            \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
        }
        
    }


    class View extends \Illuminate\Support\Facades\View{
        
        /**
         * 
         *
         * @static 
         */
        public static function file($path, $data = array(), $mergeData = array()){
            return \Illuminate\View\Factory::file($path, $data, $mergeData);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function make($view, $data = array(), $mergeData = array()){
            return \Illuminate\View\Factory::make($view, $data, $mergeData);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function of($view, $data = array()){
            return \Illuminate\View\Factory::of($view, $data);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function name($view, $name){
            return \Illuminate\View\Factory::name($view, $name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function alias($view, $alias){
            return \Illuminate\View\Factory::alias($view, $alias);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function exists($view){
            return \Illuminate\View\Factory::exists($view);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
            return \Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEngineFromPath($path){
            return \Illuminate\View\Factory::getEngineFromPath($path);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function share($key, $value = null){
            return \Illuminate\View\Factory::share($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function creator($views, $callback){
            return \Illuminate\View\Factory::creator($views, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function composers($composers){
            return \Illuminate\View\Factory::composers($composers);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function composer($views, $callback, $priority = null){
            return \Illuminate\View\Factory::composer($views, $callback, $priority);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callComposer($view){
            return \Illuminate\View\Factory::callComposer($view);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function callCreator($view){
            return \Illuminate\View\Factory::callCreator($view);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startSection($section, $content = ''){
            return \Illuminate\View\Factory::startSection($section, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function inject($section, $content){
            return \Illuminate\View\Factory::inject($section, $content);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function yieldSection(){
            return \Illuminate\View\Factory::yieldSection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function stopSection($overwrite = false){
            return \Illuminate\View\Factory::stopSection($overwrite);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function appendSection(){
            return \Illuminate\View\Factory::appendSection();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function yieldContent($section, $default = ''){
            return \Illuminate\View\Factory::yieldContent($section, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flushSections(){
            return \Illuminate\View\Factory::flushSections();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function flushSectionsIfDoneRendering(){
            return \Illuminate\View\Factory::flushSectionsIfDoneRendering();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function incrementRender(){
            return \Illuminate\View\Factory::incrementRender();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function decrementRender(){
            return \Illuminate\View\Factory::decrementRender();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function doneRendering(){
            return \Illuminate\View\Factory::doneRendering();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addLocation($location){
            return \Illuminate\View\Factory::addLocation($location);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addNamespace($namespace, $hints){
            return \Illuminate\View\Factory::addNamespace($namespace, $hints);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function prependNamespace($namespace, $hints){
            return \Illuminate\View\Factory::prependNamespace($namespace, $hints);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addExtension($extension, $engine, $resolver = null){
            return \Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getExtensions(){
            return \Illuminate\View\Factory::getExtensions();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getEngineResolver(){
            return \Illuminate\View\Factory::getEngineResolver();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getFinder(){
            return \Illuminate\View\Factory::getFinder();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setFinder($finder){
            return \Illuminate\View\Factory::setFinder($finder);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getDispatcher(){
            return \Illuminate\View\Factory::getDispatcher();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDispatcher($events){
            return \Illuminate\View\Factory::setDispatcher($events);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getContainer(){
            return \Illuminate\View\Factory::getContainer();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setContainer($container){
            return \Illuminate\View\Factory::setContainer($container);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function shared($key, $default = null){
            return \Illuminate\View\Factory::shared($key, $default);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getShared(){
            return \Illuminate\View\Factory::getShared();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasSection($name){
            return \Illuminate\View\Factory::hasSection($name);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getSections(){
            return \Illuminate\View\Factory::getSections();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getNames(){
            return \Illuminate\View\Factory::getNames();
        }
        
    }


    class Debugbar extends \Barryvdh\Debugbar\Facade{
        
        /**
         * Enable the Debugbar and boot, if not already booted.
         *
         * @static 
         */
        public static function enable(){
            return \Barryvdh\Debugbar\LaravelDebugbar::enable();
        }
        
        /**
         * Boot the debugbar (add collectors, renderer and listener)
         *
         * @static 
         */
        public static function boot(){
            return \Barryvdh\Debugbar\LaravelDebugbar::boot();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function shouldCollect($name, $default = false){
            return \Barryvdh\Debugbar\LaravelDebugbar::shouldCollect($name, $default);
        }
        
        /**
         * Starts a measure
         *
         * @param string $name Internal name, used to stop the measure
         * @param string $label Public name
         * @static 
         */
        public static function startMeasure($name, $label = null){
            return \Barryvdh\Debugbar\LaravelDebugbar::startMeasure($name, $label);
        }
        
        /**
         * Stops a measure
         *
         * @param string $name
         * @static 
         */
        public static function stopMeasure($name){
            return \Barryvdh\Debugbar\LaravelDebugbar::stopMeasure($name);
        }
        
        /**
         * Adds an exception to be profiled in the debug bar
         *
         * @param \Barryvdh\Debugbar\Exception $e
         * @static 
         */
        public static function addException($e){
            return \Barryvdh\Debugbar\LaravelDebugbar::addException($e);
        }
        
        /**
         * Returns a JavascriptRenderer for this instance
         *
         * @param string $baseUrl
         * @param string $basePathng
         * @return \Barryvdh\Debugbar\JavascriptRenderer 
         * @static 
         */
        public static function getJavascriptRenderer($baseUrl = null, $basePath = null){
            return \Barryvdh\Debugbar\LaravelDebugbar::getJavascriptRenderer($baseUrl, $basePath);
        }
        
        /**
         * Modify the response and inject the debugbar (or data in headers)
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param \Symfony\Component\HttpFoundation\Response $response
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */
        public static function modifyResponse($request, $response){
            return \Barryvdh\Debugbar\LaravelDebugbar::modifyResponse($request, $response);
        }
        
        /**
         * Check if the Debugbar is enabled
         *
         * @return boolean 
         * @static 
         */
        public static function isEnabled(){
            return \Barryvdh\Debugbar\LaravelDebugbar::isEnabled();
        }
        
        /**
         * Collects the data from the collectors
         *
         * @return array 
         * @static 
         */
        public static function collect(){
            return \Barryvdh\Debugbar\LaravelDebugbar::collect();
        }
        
        /**
         * Injects the web debug toolbar into the given Response.
         *
         * @param \Symfony\Component\HttpFoundation\Response $response A Response instance
         * Based on https://github.com/symfony/WebProfilerBundle/blob/master/EventListener/WebDebugToolbarListener.php
         * @static 
         */
        public static function injectDebugbar($response){
            return \Barryvdh\Debugbar\LaravelDebugbar::injectDebugbar($response);
        }
        
        /**
         * Disable the Debugbar
         *
         * @static 
         */
        public static function disable(){
            return \Barryvdh\Debugbar\LaravelDebugbar::disable();
        }
        
        /**
         * Adds a measure
         *
         * @param string $label
         * @param float $start
         * @param float $end
         * @static 
         */
        public static function addMeasure($label, $start, $end){
            return \Barryvdh\Debugbar\LaravelDebugbar::addMeasure($label, $start, $end);
        }
        
        /**
         * Utility function to measure the execution of a Closure
         *
         * @param string $label
         * @param \Closure $closure
         * @static 
         */
        public static function measure($label, $closure){
            return \Barryvdh\Debugbar\LaravelDebugbar::measure($label, $closure);
        }
        
        /**
         * Collect data in a CLI request
         *
         * @return array 
         * @static 
         */
        public static function collectConsole(){
            return \Barryvdh\Debugbar\LaravelDebugbar::collectConsole();
        }
        
        /**
         * Adds a message to the MessagesCollector
         * 
         * A message can be anything from an object to a string
         *
         * @param mixed $message
         * @param string $label
         * @static 
         */
        public static function addMessage($message, $label = 'info'){
            return \Barryvdh\Debugbar\LaravelDebugbar::addMessage($message, $label);
        }
        
        /**
         * Adds a data collector
         *
         * @param \DebugBar\DataCollectorInterface $collector
         * @throws DebugBarException
         * @return $this 
         * @static 
         */
        public static function addCollector($collector){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::addCollector($collector);
        }
        
        /**
         * Checks if a data collector has been added
         *
         * @param string $name
         * @return boolean 
         * @static 
         */
        public static function hasCollector($name){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::hasCollector($name);
        }
        
        /**
         * Returns a data collector
         *
         * @param string $name
         * @return \DebugBar\DataCollectorInterface 
         * @static 
         */
        public static function getCollector($name){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getCollector($name);
        }
        
        /**
         * Returns an array of all data collectors
         *
         * @return \DebugBar\array[DataCollectorInterface] 
         * @static 
         */
        public static function getCollectors(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getCollectors();
        }
        
        /**
         * Sets the request id generator
         *
         * @param \DebugBar\RequestIdGeneratorInterface $generator
         * @static 
         */
        public static function setRequestIdGenerator($generator){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setRequestIdGenerator($generator);
        }
        
        /**
         * 
         *
         * @return \DebugBar\RequestIdGeneratorInterface 
         * @static 
         */
        public static function getRequestIdGenerator(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getRequestIdGenerator();
        }
        
        /**
         * Returns the id of the current request
         *
         * @return string 
         * @static 
         */
        public static function getCurrentRequestId(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getCurrentRequestId();
        }
        
        /**
         * Sets the storage backend to use to store the collected data
         *
         * @param \DebugBar\StorageInterface $storage
         * @static 
         */
        public static function setStorage($storage = null){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setStorage($storage);
        }
        
        /**
         * 
         *
         * @return \DebugBar\StorageInterface 
         * @static 
         */
        public static function getStorage(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getStorage();
        }
        
        /**
         * Checks if the data will be persisted
         *
         * @return boolean 
         * @static 
         */
        public static function isDataPersisted(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::isDataPersisted();
        }
        
        /**
         * Sets the HTTP driver
         *
         * @param \DebugBar\HttpDriverInterface $driver
         * @static 
         */
        public static function setHttpDriver($driver){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setHttpDriver($driver);
        }
        
        /**
         * Returns the HTTP driver
         * 
         * If no http driver where defined, a PhpHttpDriver is automatically created
         *
         * @return \DebugBar\HttpDriverInterface 
         * @static 
         */
        public static function getHttpDriver(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getHttpDriver();
        }
        
        /**
         * Returns collected data
         * 
         * Will collect the data if none have been collected yet
         *
         * @return array 
         * @static 
         */
        public static function getData(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getData();
        }
        
        /**
         * Returns an array of HTTP headers containing the data
         *
         * @param string $headerName
         * @param integer $maxHeaderLength
         * @return array 
         * @static 
         */
        public static function getDataAsHeaders($headerName = 'phpdebugbar', $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getDataAsHeaders($headerName, $maxHeaderLength, $maxTotalHeaderLength);
        }
        
        /**
         * Sends the data through the HTTP headers
         *
         * @param bool $useOpenHandler
         * @param string $headerName
         * @param integer $maxHeaderLength
         * @static 
         */
        public static function sendDataInHeaders($useOpenHandler = null, $headerName = 'phpdebugbar', $maxHeaderLength = 4096){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::sendDataInHeaders($useOpenHandler, $headerName, $maxHeaderLength);
        }
        
        /**
         * Stacks the data in the session for later rendering
         *
         * @static 
         */
        public static function stackData(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::stackData();
        }
        
        /**
         * Checks if there is stacked data in the session
         *
         * @return boolean 
         * @static 
         */
        public static function hasStackedData(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::hasStackedData();
        }
        
        /**
         * Returns the data stacked in the session
         *
         * @param boolean $delete Whether to delete the data in the session
         * @return array 
         * @static 
         */
        public static function getStackedData($delete = true){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getStackedData($delete);
        }
        
        /**
         * Sets the key to use in the $_SESSION array
         *
         * @param string $ns
         * @static 
         */
        public static function setStackDataSessionNamespace($ns){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setStackDataSessionNamespace($ns);
        }
        
        /**
         * Returns the key used in the $_SESSION array
         *
         * @return string 
         * @static 
         */
        public static function getStackDataSessionNamespace(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::getStackDataSessionNamespace();
        }
        
        /**
         * Sets whether to only use the session to store stacked data even
         * if a storage is enabled
         *
         * @param boolean $enabled
         * @static 
         */
        public static function setStackAlwaysUseSessionStorage($enabled = true){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::setStackAlwaysUseSessionStorage($enabled);
        }
        
        /**
         * Checks if the session is always used to store stacked data
         * even if a storage is enabled
         *
         * @return boolean 
         * @static 
         */
        public static function isStackAlwaysUseSessionStorage(){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::isStackAlwaysUseSessionStorage();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetSet($key, $value){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::offsetSet($key, $value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetGet($key){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::offsetGet($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetExists($key){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::offsetExists($key);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function offsetUnset($key){
            //Method inherited from \DebugBar\DebugBar            
            return \Barryvdh\Debugbar\LaravelDebugbar::offsetUnset($key);
        }
        
    }


    class CarbonLoc extends \jorgelsaud\Carbonlocalizer\Facades\Carbonlocalizer{
        
        /**
         * Get the difference in a human readable format.
         * 
         * When comparing a value in the past to default now:
         * 1 hour ago
         * 5 months ago
         * 
         * When comparing a value in the future to default now:
         * 1 hour from now
         * 5 months from now
         * 
         * When comparing a value in the past to another value:
         * 1 hour before
         * 5 months before
         * 
         * When comparing a value in the future to another value:
         * 1 hour after
         * 5 months after
         *
         * @param \jorgelsaud\Carbonlocalizer\Carbon $other
         * @return string 
         * @static 
         */
        public static function diffForHumans2($other = null){
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffForHumans2($other);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function instance($dt){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::instance($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function parse($time = null, $tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::parse($time, $tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function now($tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::now($tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function today($tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::today($tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function tomorrow($tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::tomorrow($tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function yesterday($tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::yesterday($tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function maxValue(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::maxValue();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function minValue(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::minValue();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function create($year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null, $tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::create($year, $month, $day, $hour, $minute, $second, $tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromDate($year = null, $month = null, $day = null, $tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::createFromDate($year, $month, $day, $tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromTime($hour = null, $minute = null, $second = null, $tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::createFromTime($hour, $minute, $second, $tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromFormat($format, $time, $tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::createFromFormat($format, $time, $tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromTimestamp($timestamp, $tz = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::createFromTimestamp($timestamp, $tz);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function createFromTimestampUTC($timestamp){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::createFromTimestampUTC($timestamp);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function copy(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::copy();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function year($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::year($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function month($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::month($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function day($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::day($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hour($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::hour($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function minute($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::minute($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function second($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::second($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDateTime($year, $month, $day, $hour, $minute, $second = 0){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setDateTime($year, $month, $day, $hour, $minute, $second);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function timestamp($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::timestamp($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function timezone($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::timezone($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function tz($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::tz($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTimezone($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setTimezone($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTestNow($testNow = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setTestNow($testNow);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTestNow(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::getTestNow();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasTestNow(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::hasTestNow();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasRelativeKeywords($time){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::hasRelativeKeywords($time);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTranslator(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::getTranslator();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTranslator($translator){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setTranslator($translator);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLocale(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::getLocale();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setLocale($locale){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setLocale($locale);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function formatLocalized($format){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::formatLocalized($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function resetToStringFormat(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::resetToStringFormat();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setToStringFormat($format){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setToStringFormat($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toDateString(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toDateString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toFormattedDateString(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toFormattedDateString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toTimeString(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toTimeString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toDateTimeString(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toDateTimeString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toDayDateTimeString(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toDayDateTimeString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toAtomString(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toAtomString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toCookieString(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toCookieString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toIso8601String(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toIso8601String();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toRfc822String(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toRfc822String();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toRfc850String(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toRfc850String();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toRfc1036String(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toRfc1036String();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toRfc1123String(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toRfc1123String();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toRfc2822String(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toRfc2822String();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toRfc3339String(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toRfc3339String();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toRssString(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toRssString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function toW3cString(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::toW3cString();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function eq($dt){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::eq($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function ne($dt){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::ne($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function gt($dt){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::gt($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function gte($dt){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::gte($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lt($dt){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::lt($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lte($dt){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::lte($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function between($dt1, $dt2, $equal = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::between($dt1, $dt2, $equal);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function min($dt = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::min($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function max($dt = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::max($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isWeekday(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isWeekday();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isWeekend(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isWeekend();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isYesterday(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isYesterday();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isToday(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isToday();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isTomorrow(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isTomorrow();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isFuture(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isFuture();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isPast(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isPast();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isLeapYear(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isLeapYear();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isSameDay($dt){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isSameDay($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addYears($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addYears($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addYear($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addYear($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subYear($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subYear($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subYears($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subYears($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addMonths($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addMonths($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addMonth($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addMonth($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subMonth($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subMonth($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subMonths($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subMonths($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addMonthsNoOverflow($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addMonthsNoOverflow($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addMonthNoOverflow($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addMonthNoOverflow($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subMonthNoOverflow($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subMonthNoOverflow($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subMonthsNoOverflow($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subMonthsNoOverflow($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addDays($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addDays($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addDay($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addDay($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subDay($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subDay($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subDays($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subDays($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addWeekdays($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addWeekdays($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addWeekday($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addWeekday($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subWeekday($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subWeekday($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subWeekdays($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subWeekdays($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addWeeks($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addWeeks($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addWeek($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addWeek($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subWeek($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subWeek($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subWeeks($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subWeeks($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addHours($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addHours($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addHour($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addHour($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subHour($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subHour($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subHours($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subHours($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addMinutes($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addMinutes($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addMinute($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addMinute($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subMinute($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subMinute($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subMinutes($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subMinutes($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addSeconds($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addSeconds($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function addSecond($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::addSecond($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subSecond($value = 1){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subSecond($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function subSeconds($value){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::subSeconds($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInYears($dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInYears($dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInMonths($dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInMonths($dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInWeeks($dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInWeeks($dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInDays($dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInDays($dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInDaysFiltered($callback, $dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInDaysFiltered($callback, $dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInHoursFiltered($callback, $dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInHoursFiltered($callback, $dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffFiltered($ci, $callback, $dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffFiltered($ci, $callback, $dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInWeekdays($dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInWeekdays($dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInWeekendDays($dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInWeekendDays($dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInHours($dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInHours($dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInMinutes($dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInMinutes($dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffInSeconds($dt = null, $abs = true){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffInSeconds($dt, $abs);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secondsSinceMidnight(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::secondsSinceMidnight();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function secondsUntilEndOfDay(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::secondsUntilEndOfDay();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diffForHumans($other = null, $absolute = false){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diffForHumans($other, $absolute);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startOfDay(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::startOfDay();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function endOfDay(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::endOfDay();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startOfMonth(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::startOfMonth();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function endOfMonth(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::endOfMonth();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startOfYear(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::startOfYear();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function endOfYear(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::endOfYear();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startOfDecade(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::startOfDecade();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function endOfDecade(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::endOfDecade();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startOfCentury(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::startOfCentury();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function endOfCentury(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::endOfCentury();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function startOfWeek(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::startOfWeek();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function endOfWeek(){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::endOfWeek();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function next($dayOfWeek = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::next($dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function previous($dayOfWeek = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::previous($dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function firstOfMonth($dayOfWeek = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::firstOfMonth($dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lastOfMonth($dayOfWeek = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::lastOfMonth($dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function nthOfMonth($nth, $dayOfWeek){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::nthOfMonth($nth, $dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function firstOfQuarter($dayOfWeek = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::firstOfQuarter($dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lastOfQuarter($dayOfWeek = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::lastOfQuarter($dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function nthOfQuarter($nth, $dayOfWeek){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::nthOfQuarter($nth, $dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function firstOfYear($dayOfWeek = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::firstOfYear($dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function lastOfYear($dayOfWeek = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::lastOfYear($dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function nthOfYear($nth, $dayOfWeek){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::nthOfYear($nth, $dayOfWeek);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function average($dt = null){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::average($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function isBirthday($dt){
            //Method inherited from \Carbon\Carbon            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::isBirthday($dt);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getLastErrors(){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::getLastErrors();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function format($format){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::format($format);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function modify($modify){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::modify($modify);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function add($interval){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::add($interval);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function sub($interval){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::sub($interval);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTimezone(){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::getTimezone();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getOffset(){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::getOffset();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTime($hour, $minute, $second = null){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setTime($hour, $minute, $second);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setDate($year, $month, $day){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setDate($year, $month, $day);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setISODate($year, $week, $day = null){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setISODate($year, $week, $day);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function setTimestamp($unixtimestamp){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::setTimestamp($unixtimestamp);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function getTimestamp(){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::getTimestamp();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function diff($object, $absolute = null){
            //Method inherited from \DateTime            
            return \jorgelsaud\Carbonlocalizer\Carbonlocalizer::diff($object, $absolute);
        }
        
    }


    class Form extends \Bootstrapper\Facades\Form{
        
        /**
         * Create a submit button element.
         *
         * @param string|null $value The value of the submit button
         * @param array $options The options
         * @return string 
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */
        public static function submit($value = null, $options = array()){
            return \Bootstrapper\Form::submit($value, $options);
        }
        
        /**
         * Create a form label element.
         *
         * @param string $name The name of the object this label will be
         *                             attached to
         * @param string|null $value The text of the label
         * @param array $options The options of the label
         * @return string 
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */
        public static function label($name, $value = null, $options = array()){
            return \Bootstrapper\Form::label($name, $value, $options);
        }
        
        /**
         * Opens an inline form
         *
         * @param array $attributes The attributes of the array
         * @return string 
         * @static 
         */
        public static function inline($attributes = array()){
            return \Bootstrapper\Form::inline($attributes);
        }
        
        /**
         * Opens a horizontal form
         *
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function horizontal($attributes = array()){
            return \Bootstrapper\Form::horizontal($attributes);
        }
        
        /**
         * Creates a validation block
         *
         * @param string $type The type of validation
         * @param string $label The label
         * @param string $input The input
         * @param array $attributes The attributes of the validation block
         * @return string 
         * @static 
         */
        public static function validation($type, $label, $input, $attributes = array()){
            return \Bootstrapper\Form::validation($type, $label, $input, $attributes);
        }
        
        /**
         * Creates a success validation block
         *
         * @param string $label The label
         * @param string $input The input
         * @param array $attributes The attributes of the validation block
         * @return string 
         * @see Bootstrapper\\Form::validation()
         * @static 
         */
        public static function success($label, $input, $attributes = array()){
            return \Bootstrapper\Form::success($label, $input, $attributes);
        }
        
        /**
         * Creates a warning validation block
         *
         * @param string $label The label
         * @param string $input The input
         * @param array $attributes The attributes of the validation block
         * @return string 
         * @see Bootstrapper\\Form::validation()
         * @static 
         */
        public static function warning($label, $input, $attributes = array()){
            return \Bootstrapper\Form::warning($label, $input, $attributes);
        }
        
        /**
         * Creates an error validation block
         *
         * @param string $label The label
         * @param string $input The input
         * @param array $attributes The attributes of the validation block
         * @return string 
         * @see Bootstrapper\\Form::validation()
         * @static 
         */
        public static function error($label, $input, $attributes = array()){
            return \Bootstrapper\Form::error($label, $input, $attributes);
        }
        
        /**
         * Creates a feedback block with an icon
         *
         * @param string $label The label
         * @param string $input The input
         * @param string $icon The icon
         * @param array $attributes The attributes of the block
         * @return string 
         * @static 
         */
        public static function feedback($label, $input, $icon, $attributes = array()){
            return \Bootstrapper\Form::feedback($label, $input, $icon, $attributes);
        }
        
        /**
         * Creates a help block
         *
         * @param string $helpText The help text
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function help($helpText, $attributes = array()){
            return \Bootstrapper\Form::help($helpText, $attributes);
        }
        
        /**
         * Opens a horizontal form with a given model
         *
         * @param mixed $model
         * @param array $attributes
         * @return string 
         * @see Bootstrapper\Form::horizontal()
         * @see Illuminate\Html::model()
         * @static 
         */
        public static function horizontalModel($model, $attributes = array()){
            return \Bootstrapper\Form::horizontalModel($model, $attributes);
        }
        
        /**
         * Opens a inline form with a given model
         *
         * @param mixed $model
         * @param array $attributes
         * @return string 
         * @see Bootstrapper\Form::inline()
         * @see Illuminate\Html::model()
         * @static 
         */
        public static function inlineModel($model, $attributes = array()){
            return \Bootstrapper\Form::inlineModel($model, $attributes);
        }
        
        /**
         * Create a select box field.
         *
         * @param string $name
         * @param array $list
         * @param null $selected
         * @param array $attributes
         * @return string 
         * @param string $name
         * @param array $list
         * @param string $selected
         * @param array $options
         * @return string 
         * @static 
         */
        public static function select($name, $list = array(), $selected = null, $attributes = array()){
            return \Bootstrapper\Form::select($name, $list, $selected, $attributes);
        }
        
        /**
         * Create a textarea input field.
         *
         * @param string $name The name of the text area
         * @param string|null $value The default value
         * @param array $attributes The attributes of the text area
         * @return string 
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */
        public static function textarea($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::textarea($name, $value, $attributes);
        }
        
        /**
         * Create a password input field.
         *
         * @param string $name The name of the password input
         * @param array $attributes The attributes of the input
         * @return string 
         * @param string $name
         * @param array $options
         * @return string 
         * @static 
         */
        public static function password($name, $attributes = array()){
            return \Bootstrapper\Form::password($name, $attributes);
        }
        
        /**
         * Create a text input field.
         *
         * @param string $name The name of the text input
         * @param string|null $value The default value
         * @param array $attributes The attributes of the input
         * @return string 
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */
        public static function text($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::text($name, $value, $attributes);
        }
        
        /**
         * Create an e-mail input field.
         *
         * @param string $name The name of the email input
         * @param string|null $value The default value of the input
         * @param array $attributes The attributes of the email input
         * @return string 
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */
        public static function email($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::email($name, $value, $attributes);
        }
        
        /**
         * Creates a datetime form element
         *
         * @param string $name The name of the element
         * @param null $value The value
         * @param array $attributes The attributes
         * @return string 
         * @see Illuminate\FormBuilder\input()
         * @static 
         */
        public static function datetime($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::datetime($name, $value, $attributes);
        }
        
        /**
         * Creates a datetime local element
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @see Illuminate\FormBuilder\input()
         * @static 
         */
        public static function datetimelocal($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::datetimelocal($name, $value, $attributes);
        }
        
        /**
         * Creates a date input
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function date($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::date($name, $value, $attributes);
        }
        
        /**
         * Creates a month input
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function month($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::month($name, $value, $attributes);
        }
        
        /**
         * Creates a week form element
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function week($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::week($name, $value, $attributes);
        }
        
        /**
         * Creates a time form element
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function time($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::time($name, $value, $attributes);
        }
        
        /**
         * Creates a number form element
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function number($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::number($name, $value, $attributes);
        }
        
        /**
         * Creates a url form element
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function url($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::url($name, $value, $attributes);
        }
        
        /**
         * Creates a search element
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function search($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::search($name, $value, $attributes);
        }
        
        /**
         * Creates a tel element
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function tel($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::tel($name, $value, $attributes);
        }
        
        /**
         * Creates a color element
         *
         * @param string $name The name of the element
         * @param null $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function color($name, $value = null, $attributes = array()){
            return \Bootstrapper\Form::color($name, $value, $attributes);
        }
        
        /**
         * Open up a new HTML form.
         *
         * @param array $options
         * @return string 
         * @static 
         */
        public static function open($options = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::open($options);
        }
        
        /**
         * Create a new model based form builder.
         *
         * @param mixed $model
         * @param array $options
         * @return string 
         * @static 
         */
        public static function model($model, $options = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::model($model, $options);
        }
        
        /**
         * Set the model instance on the form builder.
         *
         * @param mixed $model
         * @return void 
         * @static 
         */
        public static function setModel($model){
            //Method inherited from \Illuminate\Html\FormBuilder            
            \Bootstrapper\Form::setModel($model);
        }
        
        /**
         * Close the current form.
         *
         * @return string 
         * @static 
         */
        public static function close(){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::close();
        }
        
        /**
         * Generate a hidden field with the current CSRF token.
         *
         * @return string 
         * @static 
         */
        public static function token(){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::token();
        }
        
        /**
         * Create a form input field.
         *
         * @param string $type
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */
        public static function input($type, $name, $value = null, $options = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::input($type, $name, $value, $options);
        }
        
        /**
         * Create a hidden input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */
        public static function hidden($name, $value = null, $options = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::hidden($name, $value, $options);
        }
        
        /**
         * Create a file input field.
         *
         * @param string $name
         * @param array $options
         * @return string 
         * @static 
         */
        public static function file($name, $options = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::file($name, $options);
        }
        
        /**
         * Create a select range field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return string 
         * @static 
         */
        public static function selectRange($name, $begin, $end, $selected = null, $options = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::selectRange($name, $begin, $end, $selected, $options);
        }
        
        /**
         * Create a select year field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return string 
         * @static 
         */
        public static function selectYear(){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::selectYear();
        }
        
        /**
         * Create a select month field.
         *
         * @param string $name
         * @param string $selected
         * @param array $options
         * @param string $format
         * @return string 
         * @static 
         */
        public static function selectMonth($name, $selected = null, $options = array(), $format = '%B'){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::selectMonth($name, $selected, $options, $format);
        }
        
        /**
         * Get the select option for the given value.
         *
         * @param string $display
         * @param string $value
         * @param string $selected
         * @return string 
         * @static 
         */
        public static function getSelectOption($display, $value, $selected){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::getSelectOption($display, $value, $selected);
        }
        
        /**
         * Create a checkbox input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return string 
         * @static 
         */
        public static function checkbox($name, $value = 1, $checked = null, $options = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::checkbox($name, $value, $checked, $options);
        }
        
        /**
         * Create a radio button input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return string 
         * @static 
         */
        public static function radio($name, $value = null, $checked = null, $options = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::radio($name, $value, $checked, $options);
        }
        
        /**
         * Create a HTML reset input element.
         *
         * @param string $value
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function reset($value, $attributes = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::reset($value, $attributes);
        }
        
        /**
         * Create a HTML image input element.
         *
         * @param string $url
         * @param string $name
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function image($url, $name = null, $attributes = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::image($url, $name, $attributes);
        }
        
        /**
         * Create a button element.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */
        public static function button($value = null, $options = array()){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::button($value, $options);
        }
        
        /**
         * Get the ID attribute for a field name.
         *
         * @param string $name
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function getIdAttribute($name, $attributes){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::getIdAttribute($name, $attributes);
        }
        
        /**
         * Get the value that should be assigned to the field.
         *
         * @param string $name
         * @param string $value
         * @return string 
         * @static 
         */
        public static function getValueAttribute($name, $value = null){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::getValueAttribute($name, $value);
        }
        
        /**
         * Get a value from the session's old input.
         *
         * @param string $name
         * @return string 
         * @static 
         */
        public static function old($name){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::old($name);
        }
        
        /**
         * Determine if the old input is empty.
         *
         * @return bool 
         * @static 
         */
        public static function oldInputIsEmpty(){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::oldInputIsEmpty();
        }
        
        /**
         * Get the session store implementation.
         *
         * @return \Illuminate\Session\Store $session
         * @static 
         */
        public static function getSessionStore(){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::getSessionStore();
        }
        
        /**
         * Set the session store implementation.
         *
         * @param \Illuminate\Session\Store $session
         * @return $this 
         * @static 
         */
        public static function setSessionStore($session){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::setSessionStore($session);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            //Method inherited from \Illuminate\Html\FormBuilder            
            return \Bootstrapper\Form::hasMacro($name);
        }
        
    }


    class HTML extends \Illuminate\Html\HtmlFacade{
        
        /**
         * Convert an HTML string to entities.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function entities($value){
            return \Illuminate\Html\HtmlBuilder::entities($value);
        }
        
        /**
         * Convert entities to HTML characters.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function decode($value){
            return \Illuminate\Html\HtmlBuilder::decode($value);
        }
        
        /**
         * Generate a link to a JavaScript file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */
        public static function script($url, $attributes = array(), $secure = null){
            return \Illuminate\Html\HtmlBuilder::script($url, $attributes, $secure);
        }
        
        /**
         * Generate a link to a CSS file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */
        public static function style($url, $attributes = array(), $secure = null){
            return \Illuminate\Html\HtmlBuilder::style($url, $attributes, $secure);
        }
        
        /**
         * Generate an HTML image element.
         *
         * @param string $url
         * @param string $alt
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */
        public static function image($url, $alt = null, $attributes = array(), $secure = null){
            return \Illuminate\Html\HtmlBuilder::image($url, $alt, $attributes, $secure);
        }
        
        /**
         * Generate a HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */
        public static function link($url, $title = null, $attributes = array(), $secure = null){
            return \Illuminate\Html\HtmlBuilder::link($url, $title, $attributes, $secure);
        }
        
        /**
         * Generate a HTTPS HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function secureLink($url, $title = null, $attributes = array()){
            return \Illuminate\Html\HtmlBuilder::secureLink($url, $title, $attributes);
        }
        
        /**
         * Generate a HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */
        public static function linkAsset($url, $title = null, $attributes = array(), $secure = null){
            return \Illuminate\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure);
        }
        
        /**
         * Generate a HTTPS HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function linkSecureAsset($url, $title = null, $attributes = array()){
            return \Illuminate\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes);
        }
        
        /**
         * Generate a HTML link to a named route.
         *
         * @param string $name
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array()){
            return \Illuminate\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes);
        }
        
        /**
         * Generate a HTML link to a controller action.
         *
         * @param string $action
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function linkAction($action, $title = null, $parameters = array(), $attributes = array()){
            return \Illuminate\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes);
        }
        
        /**
         * Generate a HTML link to an email address.
         *
         * @param string $email
         * @param string $title
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function mailto($email, $title = null, $attributes = array()){
            return \Illuminate\Html\HtmlBuilder::mailto($email, $title, $attributes);
        }
        
        /**
         * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
         *
         * @param string $email
         * @return string 
         * @static 
         */
        public static function email($email){
            return \Illuminate\Html\HtmlBuilder::email($email);
        }
        
        /**
         * Generate an ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function ol($list, $attributes = array()){
            return \Illuminate\Html\HtmlBuilder::ol($list, $attributes);
        }
        
        /**
         * Generate an un-ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function ul($list, $attributes = array()){
            return \Illuminate\Html\HtmlBuilder::ul($list, $attributes);
        }
        
        /**
         * Build an HTML attribute string from an array.
         *
         * @param array $attributes
         * @return string 
         * @static 
         */
        public static function attributes($attributes){
            return \Illuminate\Html\HtmlBuilder::attributes($attributes);
        }
        
        /**
         * Obfuscate a string to prevent spam-bots from sniffing it.
         *
         * @param string $value
         * @return string 
         * @static 
         */
        public static function obfuscate($value){
            return \Illuminate\Html\HtmlBuilder::obfuscate($value);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function macro($name, $macro){
            return \Illuminate\Html\HtmlBuilder::macro($name, $macro);
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function hasMacro($name){
            return \Illuminate\Html\HtmlBuilder::hasMacro($name);
        }
        
    }


    class Accordion extends \Bootstrapper\Facades\Accordion{
        
        /**
         * Name the accordion
         *
         * @param $name The name of the accordion
         * @return $this 
         * @static 
         */
        public static function named($name){
            return \Bootstrapper\Accordion::named($name);
        }
        
        /**
         * Add the contents for the accordion. Should be an array of arrays
         * <strong>Expected Keys</strong>:
         * <ul>
         * <li>title</li>
         * <li>contents</li>
         * <li>attributes (optional)</li>
         * </ul>
         *
         * @param array $contents
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\Accordion::withContents($contents);
        }
        
        /**
         * Sets which panel should be opened. Numbering begins from 0.
         *
         * @param $integer int
         * @return $this 
         * @static 
         */
        public static function open($integer){
            return \Bootstrapper\Accordion::open($integer);
        }
        
        /**
         * Renders the accordion
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Accordion::render();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Accordion::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Accordion::addClass($classes);
        }
        
    }


    class Alert extends \Bootstrapper\Facades\Alert{
        
        /**
         * Sets the type of the alert. The alert prefix is not assumed.
         *
         * @param $type string
         * @return $this 
         * @static 
         */
        public static function setType($type){
            return \Bootstrapper\Alert::setType($type);
        }
        
        /**
         * Renders the alert
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Alert::render();
        }
        
        /**
         * Creates an info alert box
         *
         * @param string $contents
         * @return $this 
         * @static 
         */
        public static function info($contents = ''){
            return \Bootstrapper\Alert::info($contents);
        }
        
        /**
         * Creates a success alert box
         *
         * @param string $contents
         * @return $this 
         * @static 
         */
        public static function success($contents = ''){
            return \Bootstrapper\Alert::success($contents);
        }
        
        /**
         * Creates a warning alert box
         *
         * @param string $contents
         * @return $this 
         * @static 
         */
        public static function warning($contents = ''){
            return \Bootstrapper\Alert::warning($contents);
        }
        
        /**
         * Creates a danger alert box
         *
         * @param string $contents
         * @return $this 
         * @static 
         */
        public static function danger($contents = ''){
            return \Bootstrapper\Alert::danger($contents);
        }
        
        /**
         * Sets the contents of the alert box
         *
         * @param $contents
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\Alert::withContents($contents);
        }
        
        /**
         * Adds a close button with the given text
         *
         * @param string $closer
         * @return $this 
         * @static 
         */
        public static function close($closer = '&times;'){
            return \Bootstrapper\Alert::close($closer);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Alert::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Alert::addClass($classes);
        }
        
    }


    class Badge extends \Bootstrapper\Facades\Badge{
        
        /**
         * Renders the badge
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Badge::render();
        }
        
        /**
         * Adds contents to the badge
         *
         * @param $contents
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\Badge::withContents($contents);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Badge::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Badge::addClass($classes);
        }
        
    }


    class Breadcrumb extends \Bootstrapper\Facades\Breadcrumb{
        
        /**
         * Renders the breadcrumb
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Breadcrumb::render();
        }
        
        /**
         * Set the links for the breadcrumbs. Expects an array of the following:
         * <ul>
         * <li>An array, with keys <code>link</code> and <code>text</code></li>
         * <li>A string for the active link
         * </ul>
         *
         * @param $links array
         * @return $this 
         * @static 
         */
        public static function withLinks($links){
            return \Bootstrapper\Breadcrumb::withLinks($links);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Breadcrumb::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Breadcrumb::addClass($classes);
        }
        
    }


    class Button extends \Bootstrapper\Facades\Button{
        
        /**
         * Sets the type of the button
         *
         * @param $type string The new type of the button. Assumes that the btn-
         *              prefix is there
         * @return $this 
         * @static 
         */
        public static function setType($type){
            return \Bootstrapper\Button::setType($type);
        }
        
        /**
         * Sets the size of the button
         *
         * @param $size string The new size of the button. Assumes that the btn-
         *              prefix is there
         * @return $this 
         * @static 
         */
        public static function setSize($size){
            return \Bootstrapper\Button::setSize($size);
        }
        
        /**
         * Renders the button
         *
         * @return string as a string
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Button::render();
        }
        
        /**
         * Creates a button with class .btn-default and the given contents
         *
         * @param string $contents The contents of the button The contents of the
         *                         button
         * @return \Bootstrapper\Button 
         * @static 
         */
        public static function normal($contents = ''){
            return \Bootstrapper\Button::normal($contents);
        }
        
        /**
         * Creates an button with class .btn-primary and the given contents
         *
         * @param string $contents The contents of the button The contents of the
         *                         button
         * @return \Bootstrapper\Button 
         * @static 
         */
        public static function primary($contents = ''){
            return \Bootstrapper\Button::primary($contents);
        }
        
        /**
         * Creates an button with class .btn-success and the given contents
         *
         * @param string $contents The contents of the button The contents of the
         *                         button
         * @return \Bootstrapper\Button 
         * @static 
         */
        public static function success($contents = ''){
            return \Bootstrapper\Button::success($contents);
        }
        
        /**
         * Creates an button with class .btn-info and the given contents
         *
         * @param string $contents The contents of the button
         * @return \Bootstrapper\Button 
         * @static 
         */
        public static function info($contents = ''){
            return \Bootstrapper\Button::info($contents);
        }
        
        /**
         * Creates an button with class .btn-warning and the given contents
         *
         * @param string $contents The contents of the button
         * @return \Bootstrapper\Button 
         * @static 
         */
        public static function warning($contents = ''){
            return \Bootstrapper\Button::warning($contents);
        }
        
        /**
         * Creates an button with class .btn-danger and the given contents
         *
         * @param string $contents The contents of the button
         * @return \Bootstrapper\Button 
         * @static 
         */
        public static function danger($contents = ''){
            return \Bootstrapper\Button::danger($contents);
        }
        
        /**
         * Creates an button with class .btn-link and the given contents
         *
         * @param string $contents The contents of the button
         * @return \Bootstrapper\Button 
         * @static 
         */
        public static function link($contents = ''){
            return \Bootstrapper\Button::link($contents);
        }
        
        /**
         * Sets the button to be a block button
         *
         * @return $this 
         * @static 
         */
        public static function block(){
            return \Bootstrapper\Button::block();
        }
        
        /**
         * Makes the button a submit button
         *
         * @return $this 
         * @static 
         */
        public static function submit(){
            return \Bootstrapper\Button::submit();
        }
        
        /**
         * Makes the button a reset button
         *
         * @return $this 
         * @static 
         */
        public static function reset(){
            return \Bootstrapper\Button::reset();
        }
        
        /**
         * Sets the value of the button
         *
         * @param $value string The new value of the button
         * @return $this 
         * @static 
         */
        public static function withValue($value = ''){
            return \Bootstrapper\Button::withValue($value);
        }
        
        /**
         * Sets the button to be a large button
         *
         * @return $this 
         * @static 
         */
        public static function large(){
            return \Bootstrapper\Button::large();
        }
        
        /**
         * Sets the button to be a small button
         *
         * @return $this 
         * @static 
         */
        public static function small(){
            return \Bootstrapper\Button::small();
        }
        
        /**
         * Sets the button to be an extra small button
         *
         * @return $this 
         * @static 
         */
        public static function extraSmall(){
            return \Bootstrapper\Button::extraSmall();
        }
        
        /**
         * More descriptive version of withAttributes
         *
         * @see withAttributes
         * @param array $attributes The attributes to add
         * @return $this 
         * @static 
         */
        public static function addAttributes($attributes){
            return \Bootstrapper\Button::addAttributes($attributes);
        }
        
        /**
         * Disables the button
         *
         * @return $this 
         * @static 
         */
        public static function disable(){
            return \Bootstrapper\Button::disable();
        }
        
        /**
         * Adds an icon to the button
         *
         * @param $icon string The icon to add
         * @param bool $append Whether the icon should be added after the text or
         *                     before
         * @return $this 
         * @static 
         */
        public static function withIcon($icon, $append = true){
            return \Bootstrapper\Button::withIcon($icon, $append);
        }
        
        /**
         * Descriptive version of withIcon(). Adds the icon after the text
         *
         * @see withIcon
         * @param $icon string The icon to add
         * @return $this 
         * @static 
         */
        public static function appendIcon($icon){
            return \Bootstrapper\Button::appendIcon($icon);
        }
        
        /**
         * Descriptive version of withIcon(). Adds the icon before the text
         *
         * @param $icon string The icon to add
         * @return $this 
         * @static 
         */
        public static function prependIcon($icon){
            return \Bootstrapper\Button::prependIcon($icon);
        }
        
        /**
         * Adds a url to the button, making it a link. This will generate an <a> tag
         *
         * @param $url string The url to link to
         * @return $this 
         * @static 
         */
        public static function asLinkTo($url){
            return \Bootstrapper\Button::asLinkTo($url);
        }
        
        /**
         * Get the type of the button
         *
         * @return string 
         * @static 
         */
        public static function getType(){
            return \Bootstrapper\Button::getType();
        }
        
        /**
         * Get the value of the button. Does not return the value with the icon
         *
         * @return string 
         * @static 
         */
        public static function getValue(){
            return \Bootstrapper\Button::getValue();
        }
        
        /**
         * Gets the attributes of the button
         *
         * @return array 
         * @static 
         */
        public static function getAttributes(){
            return \Bootstrapper\Button::getAttributes();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Button::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Button::addClass($classes);
        }
        
    }


    class ButtonGroup extends \Bootstrapper\Facades\ButtonGroup{
        
        /**
         * Renders the button group
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\ButtonGroup::render();
        }
        
        /**
         * Sets the size of the button group
         *
         * @param $size
         * @static 
         */
        public static function setSize($size){
            return \Bootstrapper\ButtonGroup::setSize($size);
        }
        
        /**
         * Sets the button group to be large
         *
         * @return $this 
         * @static 
         */
        public static function large(){
            return \Bootstrapper\ButtonGroup::large();
        }
        
        /**
         * Sets the button group to be small
         *
         * @return $this 
         * @static 
         */
        public static function small(){
            return \Bootstrapper\ButtonGroup::small();
        }
        
        /**
         * Sets the button group to be extra small
         *
         * @return $this 
         * @static 
         */
        public static function extraSmall(){
            return \Bootstrapper\ButtonGroup::extraSmall();
        }
        
        /**
         * Sets the button group to be radio
         *
         * @param array $contents
         * @return $this 
         * @static 
         */
        public static function radio($contents){
            return \Bootstrapper\ButtonGroup::radio($contents);
        }
        
        /**
         * Sets the button group to be a checkbox
         *
         * @param array $contents
         * @return $this 
         * @static 
         */
        public static function checkbox($contents){
            return \Bootstrapper\ButtonGroup::checkbox($contents);
        }
        
        /**
         * Sets the contents of the button group
         *
         * @param array $contents
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\ButtonGroup::withContents($contents);
        }
        
        /**
         * Sets the button group to be vertical
         *
         * @return $this 
         * @static 
         */
        public static function vertical(){
            return \Bootstrapper\ButtonGroup::vertical();
        }
        
        /**
         * Sets the type of the button group
         *
         * @param $type
         * @return $this 
         * @static 
         */
        public static function asType($type){
            return \Bootstrapper\ButtonGroup::asType($type);
        }
        
        /**
         * Renders the contents of the button group
         *
         * @return string 
         * @throws ButtonGroupException if a string should be activated
         * @static 
         */
        public static function renderContents(){
            return \Bootstrapper\ButtonGroup::renderContents();
        }
        
        /**
         * 
         *
         * @static 
         */
        public static function links($contents = array()){
            return \Bootstrapper\ButtonGroup::links($contents);
        }
        
        /**
         * Sets a link to be activated
         *
         * @param $toActivate
         * @return $this 
         * @static 
         */
        public static function activate($toActivate){
            return \Bootstrapper\ButtonGroup::activate($toActivate);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\ButtonGroup::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\ButtonGroup::addClass($classes);
        }
        
    }


    class Carousel extends \Bootstrapper\Facades\Carousel{
        
        /**
         * Names the carousel
         *
         * @param string $name The name of the carousel
         * @return $this 
         * @static 
         */
        public static function named($name){
            return \Bootstrapper\Carousel::named($name);
        }
        
        /**
         * Set the control icons or text
         *
         * @param string $previousButton Left arrorw, previous text
         * @param string $nextButton right arrow, next string
         * @return \Bootstrapper\this 
         * @static 
         */
        public static function withControls($previousButton, $nextButton){
            return \Bootstrapper\Carousel::withControls($previousButton, $nextButton);
        }
        
        /**
         * Sets the contents of the carousel
         *
         * @param array $contents The new contents. Should be an array of arrays,
         *                        with the inner keys being "image", "alt" and
         *                        (optionally) "caption"
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\Carousel::withContents($contents);
        }
        
        /**
         * Renders the carousel
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Carousel::render();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Carousel::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Carousel::addClass($classes);
        }
        
    }


    class ControlGroup extends \Bootstrapper\Facades\ControlGroup{
        
        /**
         * Renders the control group
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\ControlGroup::render();
        }
        
        /**
         * Set the attributes of the control group
         *
         * @param array $attributes The attributes array
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            return \Bootstrapper\ControlGroup::withAttributes($attributes);
        }
        
        /**
         * Adds the contents to the control group
         *
         * @param string $contents The contents of the control group
         * @param null $controlSize |int The size of the form control
         * @return $this 
         * @throws ControlGroupException If is $controlSize set and not between 1
         *                            and 12
         * @static 
         */
        public static function withContents($contents, $controlSize = null){
            return \Bootstrapper\ControlGroup::withContents($contents, $controlSize);
        }
        
        /**
         * Sets the label of the control group
         *
         * @param string $label The label
         * @param null $labelSize |int The size of the label
         * @return $this 
         * @throws ControlGroupException If is $labelSize set and not between 1
         *                          and 12
         * @static 
         */
        public static function withLabel($label, $labelSize = null){
            return \Bootstrapper\ControlGroup::withLabel($label, $labelSize);
        }
        
        /**
         * Adds a help block
         *
         * @param string $help The help information
         * @return $this 
         * @static 
         */
        public static function withHelp($help){
            return \Bootstrapper\ControlGroup::withHelp($help);
        }
        
        /**
         * Generates a full control group with a label, control and help block
         *
         * @param string $label The label
         * @param string $control The form control
         * @param string $help The help text
         * @param int $labelSize The size of the label
         * @param int $controlSize The size of the form control
         * @return $this 
         * @throws ControlGroupException if the sizes are invalid
         * @static 
         */
        public static function generate($label, $control, $help = null, $labelSize = null, $controlSize = null){
            return \Bootstrapper\ControlGroup::generate($label, $control, $help, $labelSize, $controlSize);
        }
        
        /**
         * Renders the label
         *
         * @return string 
         * @static 
         */
        public static function renderLabel(){
            return \Bootstrapper\ControlGroup::renderLabel();
        }
        
        /**
         * Creates the div to surround the form control
         *
         * @return string 
         * @static 
         */
        public static function createControlDiv(){
            return \Bootstrapper\ControlGroup::createControlDiv();
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\ControlGroup::addClass($classes);
        }
        
    }


    class DropdownButton extends \Bootstrapper\Facades\DropdownButton{
        
        /**
         * Set the label of the button
         *
         * @param $label
         * @return $this 
         * @static 
         */
        public static function labelled($label){
            return \Bootstrapper\DropdownButton::labelled($label);
        }
        
        /**
         * Set the contents of the button
         *
         * @param array $contents The contents of the dropdown button
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\DropdownButton::withContents($contents);
        }
        
        /**
         * Sets the type of the button
         *
         * @param string $type The type of the button
         * @return $this 
         * @static 
         */
        public static function setType($type){
            return \Bootstrapper\DropdownButton::setType($type);
        }
        
        /**
         * Sets the size of the button
         *
         * @param string $size The size of the button
         * @return $this 
         * @static 
         */
        public static function setSize($size){
            return \Bootstrapper\DropdownButton::setSize($size);
        }
        
        /**
         * Splits the button
         *
         * @return $this 
         * @static 
         */
        public static function split(){
            return \Bootstrapper\DropdownButton::split();
        }
        
        /**
         * Sets the button to drop up
         *
         * @return $this 
         * @static 
         */
        public static function dropup(){
            return \Bootstrapper\DropdownButton::dropup();
        }
        
        /**
         * Creates a normal dropdown button
         *
         * @param string $label The label
         * @return $this 
         * @static 
         */
        public static function normal($label = ''){
            return \Bootstrapper\DropdownButton::normal($label);
        }
        
        /**
         * Creates a primary dropdown button
         *
         * @param string $label The label
         * @return $this 
         * @static 
         */
        public static function primary($label = ''){
            return \Bootstrapper\DropdownButton::primary($label);
        }
        
        /**
         * Creates a danger dropdown button
         *
         * @param string $label The label
         * @return $this 
         * @static 
         */
        public static function danger($label = ''){
            return \Bootstrapper\DropdownButton::danger($label);
        }
        
        /**
         * Creates a warning dropdown button
         *
         * @param string $label The label
         * @return $this 
         * @static 
         */
        public static function warning($label = ''){
            return \Bootstrapper\DropdownButton::warning($label);
        }
        
        /**
         * Creates a success dropdown button
         *
         * @param string $label The label
         * @return $this 
         * @static 
         */
        public static function success($label = ''){
            return \Bootstrapper\DropdownButton::success($label);
        }
        
        /**
         * Creates a info dropdown button
         *
         * @param string $label The label
         * @return $this 
         * @static 
         */
        public static function info($label = ''){
            return \Bootstrapper\DropdownButton::info($label);
        }
        
        /**
         * Sets the size to large
         *
         * @return $this 
         * @static 
         */
        public static function large(){
            return \Bootstrapper\DropdownButton::large();
        }
        
        /**
         * Sets the size to small
         *
         * @return $this 
         * @static 
         */
        public static function small(){
            return \Bootstrapper\DropdownButton::small();
        }
        
        /**
         * Sets the size to extra small
         *
         * @return $this 
         * @static 
         */
        public static function extraSmall(){
            return \Bootstrapper\DropdownButton::extraSmall();
        }
        
        /**
         * Renders the dropdown button
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\DropdownButton::render();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\DropdownButton::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\DropdownButton::addClass($classes);
        }
        
    }


    class Helpers extends \Bootstrapper\Facades\Helpers{
        
        /**
         * Slugifies a string
         *
         * @param string $string
         * @return mixed 
         * @static 
         */
        public static function slug($string){
            return \Bootstrapper\Helpers::slug($string);
        }
        
        /**
         * Outputs a link to the Bootstrap CDN
         *
         * @param bool $withTheme Gets the bootstrap theme as well
         * @return string 
         * @static 
         */
        public static function css($withTheme = true){
            return \Bootstrapper\Helpers::css($withTheme);
        }
        
        /**
         * Outputs a link to the Jquery and Bootstrap CDN
         *
         * @return string 
         * @static 
         */
        public static function js(){
            return \Bootstrapper\Helpers::js();
        }
        
        /**
         * Generate an id of the form "x-class-name-x". These should always be
         * unique.
         *
         * @param \Bootstrapper\RenderedObject $caller The object that called this
         * @return string A unique id
         * @static 
         */
        public static function generateId($caller){
            return \Bootstrapper\Helpers::generateId($caller);
        }
        
    }


    class Icon extends \Bootstrapper\Facades\Icon{
        
        /**
         * Renders the object
         *
         * @return string 
         * @throws IconException
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Icon::render();
        }
        
        /**
         * Creates a span link with the correct icon link
         *
         * @param string $icon The icon name
         * @return string 
         * @static 
         */
        public static function create($icon){
            return \Bootstrapper\Icon::create($icon);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Icon::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Icon::addClass($classes);
        }
        
    }


    class InputGroup extends \Bootstrapper\Facades\InputGroup{
        
        /**
         * Renders the input group
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\InputGroup::render();
        }
        
        /**
         * Sets the contents of the input group
         *
         * @param string $contents The new contents
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\InputGroup::withContents($contents);
        }
        
        /**
         * Sets the size of the input group
         *
         * @param string $size The new size
         * @return $this 
         * @static 
         */
        public static function setSize($size){
            return \Bootstrapper\InputGroup::setSize($size);
        }
        
        /**
         * Prepends something to the input
         *
         * @param string $prepend The value to prepend
         * @param bool $isButton Whether the value is a button
         * @return $this 
         * @static 
         */
        public static function prepend($prepend, $isButton = false){
            return \Bootstrapper\InputGroup::prepend($prepend, $isButton);
        }
        
        /**
         * Prepend a button
         *
         * @param string $button The button to prepend
         * @return $this 
         * @static 
         */
        public static function prependButton($button){
            return \Bootstrapper\InputGroup::prependButton($button);
        }
        
        /**
         * Appends something to the input
         *
         * @param string $append The value to append
         * @param bool $isButton Whether the value is a button
         * @return $this 
         * @static 
         */
        public static function append($append, $isButton = false){
            return \Bootstrapper\InputGroup::append($append, $isButton);
        }
        
        /**
         * Append a button
         *
         * @param string $button The button to append
         * @return $this 
         * @static 
         */
        public static function appendButton($button){
            return \Bootstrapper\InputGroup::appendButton($button);
        }
        
        /**
         * Makes the input group large
         *
         * @return $this 
         * @static 
         */
        public static function large(){
            return \Bootstrapper\InputGroup::large();
        }
        
        /**
         * Makes the input group small
         *
         * @return $this 
         * @static 
         */
        public static function small(){
            return \Bootstrapper\InputGroup::small();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\InputGroup::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\InputGroup::addClass($classes);
        }
        
    }


    class Image extends \Bootstrapper\Facades\Image{
        
        /**
         * Renders the image
         *
         * @return string 
         * @throws ImageException If the image source is not set
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Image::render();
        }
        
        /**
         * Sets the source of the image
         *
         * @param string $source The source of the image
         * @return $this 
         * @static 
         */
        public static function withSource($source){
            return \Bootstrapper\Image::withSource($source);
        }
        
        /**
         * Sets the alt text of the image
         *
         * @param string $alt The alt text of the image
         * @return $this 
         * @static 
         */
        public static function withAlt($alt){
            return \Bootstrapper\Image::withAlt($alt);
        }
        
        /**
         * Sets the image to be responsive
         *
         * @return $this 
         * @static 
         */
        public static function responsive(){
            return \Bootstrapper\Image::responsive();
        }
        
        /**
         * Creates a rounded image
         *
         * @param null|string $src The source of the image. Pass null to use the
         *                         previous value of the source
         * @param null|string $alt The alt text of the image. Pass null to use
         *                         the previous value
         * @return $this 
         * @static 
         */
        public static function rounded($src = null, $alt = null){
            return \Bootstrapper\Image::rounded($src, $alt);
        }
        
        /**
         * Creates a circle image
         *
         * @param null|string $src The source of the image. Pass null to use the
         *                         previous value of the source
         * @param null|string $alt The alt text of the image. Pass null to use
         *                         the previous value
         * @return $this 
         * @static 
         */
        public static function circle($src = null, $alt = null){
            return \Bootstrapper\Image::circle($src, $alt);
        }
        
        /**
         * Creates a thumbnail image
         *
         * @param null|string $src The source of the image. Pass null to use the
         *                         previous value of the source
         * @param null|string $alt The alt text of the image. Pass null to use
         *                         the previous value
         * @return $this 
         * @static 
         */
        public static function thumbnail($src = null, $alt = null){
            return \Bootstrapper\Image::thumbnail($src, $alt);
        }
        
        /**
         * BC version of Image::addClass()
         *
         * @param string|array $class
         * @return $this 
         * @static 
         */
        public static function addClass($class){
            return \Bootstrapper\Image::addClass($class);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Image::withAttributes($attributes);
        }
        
    }


    class Label extends \Bootstrapper\Facades\Label{
        
        /**
         * Renders the label
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Label::render();
        }
        
        /**
         * Sets the contents of the label
         *
         * @param string $contents The new contents of the label
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\Label::withContents($contents);
        }
        
        /**
         * Sets the type of the label. Assumes that the label- prefix is already set
         *
         * @param string $type The new type
         * @return $this 
         * @static 
         */
        public static function setType($type){
            return \Bootstrapper\Label::setType($type);
        }
        
        /**
         * Creates a primary label
         *
         * @param string $contents The contents of the label
         * @return $this 
         * @static 
         */
        public static function primary($contents = ''){
            return \Bootstrapper\Label::primary($contents);
        }
        
        /**
         * Creates a success label
         *
         * @param string $contents The contents of the label
         * @return $this 
         * @static 
         */
        public static function success($contents = ''){
            return \Bootstrapper\Label::success($contents);
        }
        
        /**
         * Creates an info label
         *
         * @param string $contents The contents of the label
         * @return $this 
         * @static 
         */
        public static function info($contents = ''){
            return \Bootstrapper\Label::info($contents);
        }
        
        /**
         * Creates a warning label
         *
         * @param string $contents The contents of the label
         * @return $this 
         * @static 
         */
        public static function warning($contents = ''){
            return \Bootstrapper\Label::warning($contents);
        }
        
        /**
         * Creates a danger label
         *
         * @param string $contents The contents of the label
         * @return $this 
         * @static 
         */
        public static function danger($contents = ''){
            return \Bootstrapper\Label::danger($contents);
        }
        
        /**
         * Creates a label
         *
         * @param string $contents The contents of the label
         * @param string $type The type to use
         * @return $this 
         * @static 
         */
        public static function create($contents, $type = 'label-default'){
            return \Bootstrapper\Label::create($contents, $type);
        }
        
        /**
         * Creates a normal label
         *
         * @param string $contents The contents of the label
         * @return $this 
         * @static 
         */
        public static function normal($contents = ''){
            return \Bootstrapper\Label::normal($contents);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Label::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Label::addClass($classes);
        }
        
    }


    class MediaObject extends \Bootstrapper\Facades\MediaObject{
        
        /**
         * Renders the media object
         *
         * @return string 
         * @throws MediaObjectException if there is no contents
         * @static 
         */
        public static function render(){
            return \Bootstrapper\MediaObject::render();
        }
        
        /**
         * Sets the contents of the media object
         *
         * @param array $contents The contents of the media object
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\MediaObject::withContents($contents);
        }
        
        /**
         * Force the media object to become a list
         *
         * @return $this 
         * @static 
         */
        public static function asList(){
            return \Bootstrapper\MediaObject::asList();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\MediaObject::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\MediaObject::addClass($classes);
        }
        
    }


    class Modal extends \Bootstrapper\Facades\Modal{
        
        /**
         * Renders the modal
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Modal::render();
        }
        
        /**
         * Sets the title of the modal
         *
         * @param string $title
         * @return $this 
         * @static 
         */
        public static function withTitle($title){
            return \Bootstrapper\Modal::withTitle($title);
        }
        
        /**
         * Sets the body of the modal
         *
         * @param string $body The new body of the modal
         * @return $this 
         * @static 
         */
        public static function withBody($body){
            return \Bootstrapper\Modal::withBody($body);
        }
        
        /**
         * Set the footer of the modal
         *
         * @param string $footer The footer
         * @return $this 
         * @static 
         */
        public static function withFooter($footer){
            return \Bootstrapper\Modal::withFooter($footer);
        }
        
        /**
         * Sets the name of the modal
         *
         * @param string $name The name of the modal
         * @return $this 
         * @static 
         */
        public static function named($name){
            return \Bootstrapper\Modal::named($name);
        }
        
        /**
         * Sets the button
         *
         * @param \Bootstrapper\Button $button The button to open the modal with
         * @return $this 
         * @static 
         */
        public static function withButton($button = null){
            return \Bootstrapper\Modal::withButton($button);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Modal::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Modal::addClass($classes);
        }
        
    }


    class Navbar extends \Bootstrapper\Facades\Navbar{
        
        /**
         * Renders the navbar
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Navbar::render();
        }
        
        /**
         * Sets the brand of the navbar
         *
         * @param string $brand The brand
         * @param null|string $link The link. If not set we default to linking to
         *                           '/' using the UrlGenerator
         * @return $this 
         * @static 
         */
        public static function withBrand($brand, $link = null){
            return \Bootstrapper\Navbar::withBrand($brand, $link);
        }
        
        /**
         * Adds some content to the navbar
         *
         * @param mixed $content Anything that can become a string! If you pass in a
         *                       Bootstrapper\Navigation object we'll make sure
         *                       it's a navbar on render.
         * @return $this 
         * @static 
         */
        public static function withContent($content){
            return \Bootstrapper\Navbar::withContent($content);
        }
        
        /**
         * Sets the navbar to be inverse
         *
         * @param string $position
         * @param array $attributes
         * @return $this 
         * @static 
         */
        public static function inverse($position = null, $attributes = array()){
            return \Bootstrapper\Navbar::inverse($position, $attributes);
        }
        
        /**
         * Sets the position to top
         *
         * @return $this 
         * @static 
         */
        public static function staticTop(){
            return \Bootstrapper\Navbar::staticTop();
        }
        
        /**
         * Sets the type of the navbar
         *
         * @param string $type The type of the navbar. Assumes that the navbar-
         *                     prefix is there
         * @return $this 
         * @static 
         */
        public static function setType($type){
            return \Bootstrapper\Navbar::setType($type);
        }
        
        /**
         * Sets the position of the navbar
         *
         * @param string $position The position of the navbar. Assumes that the
         *                         navbar- prefix is there
         * @return $this 
         * @static 
         */
        public static function setPosition($position){
            return \Bootstrapper\Navbar::setPosition($position);
        }
        
        /**
         * Sets the position of the navbar to the top
         *
         * @return $this 
         * @static 
         */
        public static function top(){
            return \Bootstrapper\Navbar::top();
        }
        
        /**
         * Sets the position of the navbar to the bottom
         *
         * @return $this 
         * @static 
         */
        public static function bottom(){
            return \Bootstrapper\Navbar::bottom();
        }
        
        /**
         * Creates a navbar with a position and attributes
         *
         * @param string $position The position of the navbar
         * @param array $attributes The attributes of the navbar
         * @return $this 
         * @static 
         */
        public static function create($position, $attributes = array()){
            return \Bootstrapper\Navbar::create($position, $attributes);
        }
        
        /**
         * Sets the navbar to be fluid
         *
         * @return $this 
         * @static 
         */
        public static function fluid(){
            return \Bootstrapper\Navbar::fluid();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Navbar::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Navbar::addClass($classes);
        }
        
    }


    class Navigation extends \Bootstrapper\Facades\Navigation{
        
        /**
         * Renders the navigation object
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Navigation::render();
        }
        
        /**
         * Creates a pills navigation block
         *
         * @param array $links The links
         * @param array $attributes The attributes. Does not overwrite the
         *                          previous values if not set
         * @see Bootstrapper\Navigatation::$links
         * @return $this 
         * @static 
         */
        public static function pills($links = array(), $attributes = null){
            return \Bootstrapper\Navigation::pills($links, $attributes);
        }
        
        /**
         * Sets the links of the navigation object
         *
         * @param array $links The links
         * @return $this 
         * @see Bootstrapper\Navigation::$links
         * @static 
         */
        public static function links($links){
            return \Bootstrapper\Navigation::links($links);
        }
        
        /**
         * Creates a navigation tab object.
         *
         * @param array $links The links to be passed in
         * @param array $attributes The attributes of the navigation object. Will
         *                          overwrite unless not set.
         * @return $this 
         * @static 
         */
        public static function tabs($links = array(), $attributes = null){
            return \Bootstrapper\Navigation::tabs($links, $attributes);
        }
        
        /**
         * Sets the autorouting. Pass false to turn it off, true to turn it on
         *
         * @param bool $autoroute Whether the autorouting should be on
         * @return $this 
         * @static 
         */
        public static function autoroute($autoroute){
            return \Bootstrapper\Navigation::autoroute($autoroute);
        }
        
        /**
         * Turns the navigation object into one for navbars
         *
         * @return $this 
         * @static 
         */
        public static function navbar(){
            return \Bootstrapper\Navigation::navbar();
        }
        
        /**
         * Makes the navigation links justified
         *
         * @return $this 
         * @static 
         */
        public static function justified(){
            return \Bootstrapper\Navigation::justified();
        }
        
        /**
         * Makes the navigation stacked
         *
         * @return $this 
         * @static 
         */
        public static function stacked(){
            return \Bootstrapper\Navigation::stacked();
        }
        
        /**
         * Makes the navigation links float right
         *
         * @return $this 
         * @static 
         */
        public static function right(){
            return \Bootstrapper\Navigation::right();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Navigation::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Navigation::addClass($classes);
        }
        
    }


    class Panel extends \Bootstrapper\Facades\Panel{
        
        /**
         * Renders the panel
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Panel::render();
        }
        
        /**
         * Creates a primary panel
         *
         * @return $this 
         * @static 
         */
        public static function primary(){
            return \Bootstrapper\Panel::primary();
        }
        
        /**
         * Creates a success panel
         *
         * @return $this 
         * @static 
         */
        public static function success(){
            return \Bootstrapper\Panel::success();
        }
        
        /**
         * Creates an info panel
         *
         * @return $this 
         * @static 
         */
        public static function info(){
            return \Bootstrapper\Panel::info();
        }
        
        /**
         * Creates an warning panel
         *
         * @return $this 
         * @static 
         */
        public static function warning(){
            return \Bootstrapper\Panel::warning();
        }
        
        /**
         * Creates an danger panel
         *
         * @return $this 
         * @static 
         */
        public static function danger(){
            return \Bootstrapper\Panel::danger();
        }
        
        /**
         * Sets the type of the panel
         *
         * @param string $type The new type. Assume the panel- prefix
         * @return $this 
         * @static 
         */
        public static function setType($type){
            return \Bootstrapper\Panel::setType($type);
        }
        
        /**
         * Sets the header of the panel
         *
         * @param string $header The header
         * @return $this 
         * @static 
         */
        public static function withHeader($header){
            return \Bootstrapper\Panel::withHeader($header);
        }
        
        /**
         * Sets the body of the panel
         *
         * @param string $body The body
         * @return $this 
         * @static 
         */
        public static function withBody($body){
            return \Bootstrapper\Panel::withBody($body);
        }
        
        /**
         * Sets the table of the panel
         *
         * @param string|\Bootstrapper\Table $table The table
         * @return $this 
         * @static 
         */
        public static function withTable($table){
            return \Bootstrapper\Panel::withTable($table);
        }
        
        /**
         * Sets the footer
         *
         * @param string $footer The new footer
         * @return $this 
         * @static 
         */
        public static function withFooter($footer){
            return \Bootstrapper\Panel::withFooter($footer);
        }
        
        /**
         * Creates a normal panel
         *
         * @return $this 
         * @static 
         */
        public static function normal(){
            return \Bootstrapper\Panel::normal();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Panel::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Panel::addClass($classes);
        }
        
    }


    class ProgressBar extends \Bootstrapper\Facades\ProgressBar{
        
        /**
         * Renders the progress bar
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\ProgressBar::render();
        }
        
        /**
         * Sets the type of the progress bar
         *
         * @param string $type The type
         * @return $this 
         * @static 
         */
        public static function setType($type){
            return \Bootstrapper\ProgressBar::setType($type);
        }
        
        /**
         * Sets the value of the progress bar
         *
         * @param int $value The value of the progress bar The value of the
         *                   progress bar
         * @return $this 
         * @static 
         */
        public static function value($value){
            return \Bootstrapper\ProgressBar::value($value);
        }
        
        /**
         * Whether the amount should be visible
         *
         * @param string $string The string to show to the user. We internally
         *                       will use sprintf to show this, so you must
         *                       include a %s somewhere so we can add this in
         * @return $this 
         * @static 
         */
        public static function visible($string = '%s%%'){
            return \Bootstrapper\ProgressBar::visible($string);
        }
        
        /**
         * Creates a success progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this 
         * @static 
         */
        public static function success($value = 0){
            return \Bootstrapper\ProgressBar::success($value);
        }
        
        /**
         * Creates an info progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this 
         * @static 
         */
        public static function info($value = 0){
            return \Bootstrapper\ProgressBar::info($value);
        }
        
        /**
         * Creates a warning progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this 
         * @static 
         */
        public static function warning($value = 0){
            return \Bootstrapper\ProgressBar::warning($value);
        }
        
        /**
         * Creates a danger progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this 
         * @static 
         */
        public static function danger($value = 0){
            return \Bootstrapper\ProgressBar::danger($value);
        }
        
        /**
         * Creates a normal progress bar
         *
         * @param int $value The value of the progress bar
         * @return $this 
         * @static 
         */
        public static function normal($value = 0){
            return \Bootstrapper\ProgressBar::normal($value);
        }
        
        /**
         * Sets the progress bar to be striped
         *
         * @return $this 
         * @static 
         */
        public static function striped(){
            return \Bootstrapper\ProgressBar::striped();
        }
        
        /**
         * Sets the progress bar to be animated
         *
         * @return $this 
         * @static 
         */
        public static function animated(){
            return \Bootstrapper\ProgressBar::animated();
        }
        
        /**
         * Stacks several progress bars together
         *
         * @param array $items The progress bars. Should be an array of arrays,
         *                     which are a list of methods and parameters.
         * @return string 
         * @static 
         */
        public static function stack($items){
            return \Bootstrapper\ProgressBar::stack($items);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\ProgressBar::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\ProgressBar::addClass($classes);
        }
        
    }


    class Tabbable extends \Bootstrapper\Facades\Tabbable{
        
        /**
         * Renders the tabbable object
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Tabbable::render();
        }
        
        /**
         * Creates content with a tabbed navigation
         *
         * @param array $contents The content
         * @return $this 
         * @see Bootstrapper\Navigation::$contents
         * @static 
         */
        public static function tabs($contents = array()){
            return \Bootstrapper\Tabbable::tabs($contents);
        }
        
        /**
         * Creates content with a pill navigation
         *
         * @param array $contents
         * @return $this 
         * @see Bootstrapper\Navigation::$contents
         * @static 
         */
        public static function pills($contents = array()){
            return \Bootstrapper\Tabbable::pills($contents);
        }
        
        /**
         * Sets the contents
         *
         * @param array $contents An array of arrays
         * @return $this 
         * @see Bootstrapper\Navigation::$contents
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\Tabbable::withContents($contents);
        }
        
        /**
         * Sets which tab should be active
         *
         * @param int $active
         * @return $this 
         * @static 
         */
        public static function active($active){
            return \Bootstrapper\Tabbable::active($active);
        }
        
        /**
         * Sets the tabbable objects to fade in
         *
         * @return $this 
         * @static 
         */
        public static function fade(){
            return \Bootstrapper\Tabbable::fade();
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Tabbable::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Tabbable::addClass($classes);
        }
        
    }


    class Table extends \Bootstrapper\Facades\Table{
        
        /**
         * Renders the table
         *
         * @return string 
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Table::render();
        }
        
        /**
         * Sets the table type
         *
         * @param string $type The type of the table
         * @return $this 
         * @static 
         */
        public static function setType($type){
            return \Bootstrapper\Table::setType($type);
        }
        
        /**
         * Sets the table to be striped
         *
         * @return $this 
         * @static 
         */
        public static function striped(){
            return \Bootstrapper\Table::striped();
        }
        
        /**
         * Sets the table to be bordered
         *
         * @return $this 
         * @static 
         */
        public static function bordered(){
            return \Bootstrapper\Table::bordered();
        }
        
        /**
         * Sets the table to have an active hover state
         *
         * @return $this 
         * @static 
         */
        public static function hover(){
            return \Bootstrapper\Table::hover();
        }
        
        /**
         * Sets the table to be condensed
         *
         * @return $this 
         * @static 
         */
        public static function condensed(){
            return \Bootstrapper\Table::condensed();
        }
        
        /**
         * Sets the contents of the table
         *
         * @param array|\Bootstrapper\Traversable $contents The contents of the table. We expect
         *                                    either an array of arrays or an
         *                                    array of eloquent models
         * @return $this 
         * @static 
         */
        public static function withContents($contents){
            return \Bootstrapper\Table::withContents($contents);
        }
        
        /**
         * Creates a list of columns to ignore
         *
         * @param array $ignores The ignored columns
         * @return $this 
         * @static 
         */
        public static function ignore($ignores){
            return \Bootstrapper\Table::ignore($ignores);
        }
        
        /**
         * Adds a callback
         *
         * @param string $index The column name for the callback
         * @param callable $function The callback function,
         *                           which should be of the form
         *                           function($column, $row).
         * @return $this 
         * @static 
         */
        public static function callback($index, $function){
            return \Bootstrapper\Table::callback($index, $function);
        }
        
        /**
         * Sets which columns we can return
         *
         * @param array $only
         * @return $this 
         * @static 
         */
        public static function only($only){
            return \Bootstrapper\Table::only($only);
        }
        
        /**
         * Sets content to be rendered in to the table footer
         *
         * @param string $footer
         * @return $this 
         * @static 
         */
        public static function withFooter($footer){
            return \Bootstrapper\Table::withFooter($footer);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Table::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Table::addClass($classes);
        }
        
    }


    class Thumbnail extends \Bootstrapper\Facades\Thumbnail{
        
        /**
         * Renders the thumbnail
         *
         * @return string 
         * @throws ThumbnailException if the image is not specified
         * @static 
         */
        public static function render(){
            return \Bootstrapper\Thumbnail::render();
        }
        
        /**
         * Sets the image for the thumbnail
         *
         * @param string $image The image source
         * @param array $attributes The attributes
         * @return $this 
         * @static 
         */
        public static function image($image, $attributes = array()){
            return \Bootstrapper\Thumbnail::image($image, $attributes);
        }
        
        /**
         * Sets the caption for the thumbnail
         *
         * @param string $caption The new caption
         * @return $this 
         * @static 
         */
        public static function caption($caption){
            return \Bootstrapper\Thumbnail::caption($caption);
        }
        
        /**
         * Set the attributes of the object
         *
         * @param array $attributes The attributes to use
         * @return $this 
         * @static 
         */
        public static function withAttributes($attributes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Thumbnail::withAttributes($attributes);
        }
        
        /**
         * Adds the given classes to attributes
         *
         * @param array $classes
         * @return $this 
         * @static 
         */
        public static function addClass($classes){
            //Method inherited from \Bootstrapper\RenderedObject            
            return \Bootstrapper\Thumbnail::addClass($classes);
        }
        
    }


    class Flash extends \Laracasts\Flash\Flash{
        
        /**
         * Flash an information message.
         *
         * @param string $message
         * @static 
         */
        public static function info($message){
            return \Laracasts\Flash\FlashNotifier::info($message);
        }
        
        /**
         * Flash a success message.
         *
         * @param string $message
         * @return $this 
         * @static 
         */
        public static function success($message){
            return \Laracasts\Flash\FlashNotifier::success($message);
        }
        
        /**
         * Flash an error message.
         *
         * @param string $message
         * @return $this 
         * @static 
         */
        public static function error($message){
            return \Laracasts\Flash\FlashNotifier::error($message);
        }
        
        /**
         * Flash a warning message.
         *
         * @param string $message
         * @return $this 
         * @static 
         */
        public static function warning($message){
            return \Laracasts\Flash\FlashNotifier::warning($message);
        }
        
        /**
         * Flash an overlay modal.
         *
         * @param string $message
         * @param string $title
         * @return $this 
         * @static 
         */
        public static function overlay($message, $title = 'Notice'){
            return \Laracasts\Flash\FlashNotifier::overlay($message, $title);
        }
        
        /**
         * Flash a general message.
         *
         * @param string $message
         * @param string $level
         * @return $this 
         * @static 
         */
        public static function message($message, $level = 'info'){
            return \Laracasts\Flash\FlashNotifier::message($message, $level);
        }
        
        /**
         * Add an "important" flash to the session.
         *
         * @return $this 
         * @static 
         */
        public static function important(){
            return \Laracasts\Flash\FlashNotifier::important();
        }
        
    }


}

