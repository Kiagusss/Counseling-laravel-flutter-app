@extends('layouts.main')

@if (Auth::user()->hasRole('admin'))
@section('content')

<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            General Report
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <i data-lucide="user" class="report-box__icon text-success"></i>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $jumlahsiswa }}</div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Siswa</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="credit-card" class="report-box__icon text-pending"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $jumlahkelas }}</div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Kelas</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                    <i data-lucide="user" class="report-box__icon text-success"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $jumlahwalas }}</div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Wali Kelas</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="user" class="report-box__icon text-success"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $jumlahguru }}</div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Guru BK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->


                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Last Activity
                        </h2>

                    </div>
                    {{-- <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">No.</th>
                                    <th class="whitespace-nowrap">Activity</th>
                                    <th class="whitespace-nowrap">Created At</th>
                                    <th class="whitespace-nowrap">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    @foreach ($activity as $activity)
                                    <td>
                                        <h1 href="" class="font-medium whitespace-nowrap">{{$loop->iteration}}</h1>
                    </td>
                    <td>
                        <h1 href="" class="font-medium whitespace-nowrap">{{$activity->activity}}</h1>
                    </td>
                    <td class="w-40">
                        <h1 href="" class="font-medium whitespace-nowrap">{{$activity->created_at}}</h1>
                    </td>
                    <td>
                        <h1 href="" class="font-medium whitespace-nowrap">{{$activity->updated_at}}</h1>
                    </td>
                    @endforeach



                    </tr>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 18 May 2020">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-4.jpg" title="Uploaded at 3 March 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-10.jpg" title="Uploaded at 26 May 2020">
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                        </td>
                        <td class="text-center">50</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="Uploaded at 6 November 2022">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 24 March 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-13.jpg" title="Uploaded at 14 August 2021">
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                        </td>
                        <td class="text-center">178</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </div> --}}

                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="table-dark">
                                <th class="whitespace-nowrap">No.</th>
                                <th class="whitespace-nowrap">Activity</th>
                                <th class="whitespace-nowrap">Created At</th>
                                <th class="whitespace-nowrap">Updated At</th>
                            </tr>
                        </thead>
                        <tbody> @foreach ($activity as $activity)
                            <tr class="intro-x">

                                <td>
                                    <h1 href="" class="font-medium whitespace-nowrap">{{$loop->iteration}}</h1>
                                </td>
                                <td>
                                    <h1 href="" class="font-medium whitespace-nowrap">{{$activity->activity}}</h1>
                                </td>
                                <td class="w-40">
                                    <h1 href="" class="font-medium whitespace-nowrap">{{$activity->created_at}}</h1>
                                </td>
                                <td>
                                    <h1 href="" class="font-medium whitespace-nowrap">{{$activity->updated_at}}</h1>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- END: Weekly Top Products -->
        </div>
    </div>


</div>
</div>
</div>
</div>
</div>

@endsection



@elseif(Auth::user()->hasRole('wali_kelas'))
@section('content')

<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            General Report
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <i data-lucide="user" class="report-box__icon text-success"></i>
                                    <div class="text-3xl font-medium leading-8 mt-6"></div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Siswa</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->


             
                    {{-- <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">No.</th>
                                    <th class="whitespace-nowrap">Activity</th>
                                    <th class="whitespace-nowrap">Created At</th>
                                    <th class="whitespace-nowrap">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    @foreach ($activity as $activity)
                                    <td>
                                        <h1 href="" class="font-medium whitespace-nowrap">{{$loop->iteration}}</h1>
                    </td>
                    <td>
                        <h1 href="" class="font-medium whitespace-nowrap">{{$activity->activity}}</h1>
                    </td>
                    <td class="w-40">
                        <h1 href="" class="font-medium whitespace-nowrap">{{$activity->created_at}}</h1>
                    </td>
                    <td>
                        <h1 href="" class="font-medium whitespace-nowrap">{{$activity->updated_at}}</h1>
                    </td>
                    @endforeach



                    </tr>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 18 May 2020">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-4.jpg" title="Uploaded at 3 March 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-10.jpg" title="Uploaded at 26 May 2020">
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                        </td>
                        <td class="text-center">50</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="Uploaded at 6 November 2022">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 24 March 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-13.jpg" title="Uploaded at 14 August 2021">
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                        </td>
                        <td class="text-center">178</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </div> --}}

                
        </div>
    </div>


</div>
</div>
</div>
</div>
</div>
@endsection

@elseif(Auth::user()->hasRole('guru_bk'))
@section('content')

<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            General Report
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <i data-lucide="user" class="report-box__icon text-success"></i>
                                    <div class="text-3xl font-medium leading-8 mt-6"></div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Siswa</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="credit-card" class="report-box__icon text-pending"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6"></div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Kelas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->


                
        </div>
    </div>


</div>
</div>
</div>
</div>
</div>
@endsection

@elseif(Auth::user()->hasRole('siswa'))
@section('content')

<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            General Report
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <i data-lucide="user" class="report-box__icon text-success"></i>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $jumlahsiswa }}</div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Siswa</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="credit-card" class="report-box__icon text-pending"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $jumlahkelas }}</div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Kelas</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                    <i data-lucide="user" class="report-box__icon text-success"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $jumlahwalas }}</div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Wali Kelas</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="user" class="report-box__icon text-success"></i>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $jumlahguru }}</div>
                                    <div class="text-base text-slate-500 mt-1">Jumlah Guru BK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->


                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Last Activity
                        </h2>

                    </div>
                    {{-- <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">No.</th>
                                    <th class="whitespace-nowrap">Activity</th>
                                    <th class="whitespace-nowrap">Created At</th>
                                    <th class="whitespace-nowrap">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    @foreach ($activity as $activity)
                                    <td>
                                        <h1 href="" class="font-medium whitespace-nowrap">{{$loop->iteration}}</h1>
                    </td>
                    <td>
                        <h1 href="" class="font-medium whitespace-nowrap">{{$activity->activity}}</h1>
                    </td>
                    <td class="w-40">
                        <h1 href="" class="font-medium whitespace-nowrap">{{$activity->created_at}}</h1>
                    </td>
                    <td>
                        <h1 href="" class="font-medium whitespace-nowrap">{{$activity->updated_at}}</h1>
                    </td>
                    @endforeach



                    </tr>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-2.jpg" title="Uploaded at 18 May 2020">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-4.jpg" title="Uploaded at 3 March 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-10.jpg" title="Uploaded at 26 May 2020">
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                        </td>
                        <td class="text-center">50</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                <div class="w-10 h-10 image-fit zoom-in">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-6.jpg" title="Uploaded at 6 November 2022">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 24 March 2021">
                                </div>
                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                    <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-13.jpg" title="Uploaded at 14 August 2021">
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                        </td>
                        <td class="text-center">178</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </div> --}}

                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="table-dark">
                                <th class="whitespace-nowrap">No.</th>
                                <th class="whitespace-nowrap">Activity</th>
                                <th class="whitespace-nowrap">Created At</th>
                                <th class="whitespace-nowrap">Updated At</th>
                            </tr>
                        </thead>
                        <tbody> @foreach ($activity as $activity)
                            <tr class="intro-x">

                                <td>
                                    <h1 href="" class="font-medium whitespace-nowrap">{{$loop->iteration}}</h1>
                                </td>
                                <td>
                                    <h1 href="" class="font-medium whitespace-nowrap">{{$activity->activity}}</h1>
                                </td>
                                <td class="w-40">
                                    <h1 href="" class="font-medium whitespace-nowrap">{{$activity->created_at}}</h1>
                                </td>
                                <td>
                                    <h1 href="" class="font-medium whitespace-nowrap">{{$activity->updated_at}}</h1>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- END: Weekly Top Products -->
        </div>
    </div>


</div>
</div>
</div>
</div>
</div>
@endsection

@else
@endif
