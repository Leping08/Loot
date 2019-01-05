@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card bg-secondary">
                    <h3 class="card-header text-capitalize">Income</h3>
                    <div class="card-body">
                        <table class="table table-striped table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Company</th>
                                <th scope="col">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">01/01/2019</th>
                                <td>DigiSphere</td>
                                <td>$1250.00</td>
                            </tr>
                            <tr>
                                <th scope="row">01/01/2019</th>
                                <td>Burn</td>
                                <td>$180.00</td>
                            </tr>
                            </tbody>
                        </table>
                        <form>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="company">Company Name</label>
                                <input type="text" class="form-control" id="company">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount">
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <h3 class="card-header text-capitalize">Expenses</h3>
                    <div class="card-body">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">01/01/2019</th>
                                    <td>Car Payment</td>
                                    <td>Loan</td>
                                    <td>$310.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">01/01/2019</th>
                                    <td>HOA</td>
                                    <td>Housing</td>
                                    <td>$315.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">01/01/2019</th>
                                    <td>Electric</td>
                                    <td>Housing</td>
                                    <td>$87.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <form>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control form-control-lg" id="type">
                                    <option>Health</option>
                                    <option>Education</option>
                                    <option>Utilities</option>
                                    <option>Loan</option>
                                    <option>Entertainment</option>
                                    <option>Food</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount">
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
