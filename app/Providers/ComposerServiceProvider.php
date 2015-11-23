<?php namespace TanSAO\Providers;

use Illuminate\Support\ServiceProvider;


class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in Container
     */
    public function boot(){

        view()->composer('main._testDatesSideBar', 'TanSAO\Http\Composers\testDatesViewComposer');

        view()->composer('testDates.index', 'TanSAO\Http\Composers\AdminTestDatesViewComposer');

        view()->composer('students.show','TanSAO\Http\Composers\studentProfileViewComposer' );

        view()->composer('settings.index','TanSAO\Http\Composers\userProfileViewComposer' );

        view()->composer('admin.payments._listAll', 'TanSAO\Http\Composers\paymentsViewComposer');

        view()->composer('admin._downloadableFiles', 'TanSAO\Http\Composers\downloadableFilesViewComposer');

        view()->composer('main.visits.university', 'TanSAO\Http\Composers\MainPages\UniversityVisitsViewComposer');

    }


    public function register(){
        //
    }
}
