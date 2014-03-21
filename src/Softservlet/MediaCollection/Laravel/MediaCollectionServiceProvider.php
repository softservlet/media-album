<?php namespace Softservlet\MediaCollection\Laravel;

use Illuminate\Support\ServiceProvider;


class MediaCollectionServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('softservlet/media-collection');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Softservlet\MediaCollection\Repo\CollectionRepositoryInterface', function($app)
		{
				return new Repo\CollectionRepositoryEloquent(new ORM\CollectionDB);
		});

		$this->app->bind('Softservlet\MediaCollection\Repo\MediaObjectRepositoryInterface', function($app)
		{
				return new Repo\MediaObjectRepositoryEloquent(new ORM\MediaObjectDB); 
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
