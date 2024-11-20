@if(session()->has('message'))
  <div class="alert alert-">
  </div>

  {{ session()->get('message') }}
@endif

<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>

  <x-auth.navbars.sidebar activePage="dashboard" activeItem="analytics" activeSubitem=""></x-auth.navbars.sidebar>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <x-auth.navbars.navs.auth pageTitle="Expense Manager"></x-auth.navbars.navs.auth>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row h-full">
        <div class="col-lg-12 position-relative z-index-2">

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div
                      class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">weekend</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Bookings</p>
                    <h4 class="mb-0">281</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55%
                                        </span>than lask week</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div
                      class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">leaderboard</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                    <h4 class="mb-0">2,300</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3%
                                        </span>than last month</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div
                      class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">store</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">Revenue</p>
                    <h4 class="mb-0 ">34k</h4>
                  </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1%
                                        </span>than yesterday</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card ">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div
                      class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">Followers</p>
                    <h4 class="mb-0 ">+91</h4>
                  </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0 ">Just updated</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-4">

              <x-ui.card>
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                    <h5 class="mb-0">
                      Uploaded CSVs
                      @if($selectedCsv && $csvs->firstWhere('id', $selectedCsv))
                        - {{ pathinfo($csvs->firstWhere('id', $selectedCsv)->original_name, PATHINFO_FILENAME) }}
                      @endif
                    </h5>
                  </div>
                  <div>
                    <form action="{{ route('expenses.index') }}" method="GET" class="d-inline">

                      <select name="csv_id" class="form-select d-inline-block w-auto" onchange="this.form.submit()">
                        <option value="">All CSVs</option>
                        @foreach($csvs as $csv)
                          <option value="{{ $csv->id }}" {{ $selectedCsv == $csv->id ? 'selected' : '' }}>
                            {{ $csv->original_name }} ({{ $csv->expenses_count }} expenses)
                          </option>
                        @endforeach
                      </select>
                    </form>
                  </div>
                </div>
                
                <div class="table-responsive">
                  @if(!empty($expenses))
                    <table class="table table-flush" id="datatable-search">
                      <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th scope="col">Description</th>
                        <th scope="col">Transaction Date</th>
                        <th scope="col">Posted Date</th>
                        <th scope="col">Card No.</th>
                        <th scope="col">Category</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Credit</th>
                        <th scope="col">CSV File</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($expenses as $index => $expense)
                        <tr class="text-sm">
                          <td>{{ $index + 1 }}</td>
                          <td>{{ $expense->description }}</td>
                          <td>{{ $expense->transaction_date->format('Y-m-d') }}</td>
                          <td>{{ $expense->posted_date->format('Y-m-d') }}</td>
                          <td>{{ $expense->card_number }}</td>
                          <td>{{ $expense->Category }}</td>
                          <td class="@if($expense->debit) text-danger @endif">{{ $expense->debit }}</td>
                          <td class="@if($expense->credit) text-success @endif">{{ $expense->credit }}</td>
                          <td>{{ $expense->csv->original_name }}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  @else
                    <p>No expenses found.</p>
                  @endif
                </div>
              </x-ui.card>

              <x-ui.card>
                @if($errors->any())
                  {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                @endif
                <form action="/expenses" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="max-w-lg">
                    <label class="text-base text-gray-500 font-semibold mb-2 block text-left w-full" for="csv_file">Upload file</label>
                    <p class="text-xs text-gray-400 mt-2">CSV (MAX. 10MB)</p>
                    <div class="flex items-stretch justify-start flex-row gap-4 w-full">
                      <input type="file" id="csv_file" name="csv_file"
                             class="w-3/4 text-gray-400 font-semibold text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-3 file:px-4 file:mr-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-gray-500 rounded" />
                      <button type="submit"
                              class="w-1/4 px-3 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Upload
                      </button>
                    </div>
                  </div>
                </form>
              </x-ui.card>

            </div>
          </div>

        </div>
      </div>
      <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
    </div>
  </main>
  <x-plugins></x-plugins>
  @push('js')
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
    <script>
        const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
            searchable: true,
            fixedHeight: true
        });
    </script>
  @endpush
</x-page-template>
