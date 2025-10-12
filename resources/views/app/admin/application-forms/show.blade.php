@extends("components.layouts.admin.base")
@section("title", "$applicationForm->first_name | Application Form")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Application Form</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">First name</th>
                                    <td>{{ $applicationForm->first_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Last name</th>
                                    <td>{{ $applicationForm->last_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ $applicationForm->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone</th>
                                    <td>{{ $applicationForm->phone }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date of birth</th>
                                    <td>{{ $applicationForm->date_of_birth ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nationality</th>
                                    <td>{{ $applicationForm->nationality ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender</th>
                                    <td>{{ $applicationForm->gender ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">address</th>
                                    <td>{{ $applicationForm->address ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Emergency contact name</th>
                                    <td>{{ $applicationForm->emergency_contact_name ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Emergency contact phone</th>
                                    <td>{{ $applicationForm->emergency_contact_phone ?? "N/A" }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
