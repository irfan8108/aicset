<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AICSET-Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}"> --}}

    <style> 
        td{font-size: 12px;}
        th{font-size: 12px;}
        .head{background-color: #e0dfdf; font-size: 12px;}
    </style>
</head>
<body>
    <table class="mb-4 table ">
      <tr>
        <td><img src="{{ public_path('uploads/logo.png') }}" width="70"></td>
        <td class="pt-4 pl-0"><h5><b>All India Combined Scholarship Entrance Test</b></h5><br>
        </td>
      </tr>  
      <tr class="pb-4">
        <td><b>Name:</b> {{ $user->application->name }}</td>
        <td class="text-right"><b>Application No:</b>{{ $user->registration->app_no }}</td>
      </tr>
    </table>

    <table class="table table-bordered">
        <tr>
            <th colspan="4" class="head">Personal Details</th>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $user->application->name }}</td>
            <td colspan="2" rowspan="12" align="center">
                <br><br>
                <img src="{{ public_path('uploads/documents') }}/{{$user->photo}}" width="150px">
                <br>
                <img src="{{ public_path('uploads/documents') }}/{{$user->signature}}" width="150px">
            </td>
        </tr>
        <tr>
            <th>Aadhaar</th>
            <td>{{ $user->application->aadhaar }}</td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td>{{ $user->application->dob }}</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>{{ $user->application->category }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $user->application->gender }}</td>
        </tr>
        <tr>
            <th>Father Name</th>
            <td>{{ $user->application->father_name }}</td>
        </tr>
        <tr>
            <th>Mother Name</th>
            <td>{{ $user->application->mother_name }}</td>
        </tr>
        <tr>
            <th>Physical Handicapped</th>
            <td>{{ $user->application->pwd }}</td>
        </tr>
        <tr>
            <th>Alternate Contact Number</th>
            <td>{{ $user->application->alternate_contact }}</td>
        </tr>
        <tr>
            <th>WhatsApp Number</th>
            <td>{{ $user->application->whatsapp }}</td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td>{{ $user->mobile }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>

        <tr>
            <th colspan="4" class="head">Communication Details</th>
        </tr>
        <tr>
            <th>Address 1</th>
            <td>{{ $user->application->address_1 }}</td>
            <th>Address 2</th>
            <td>{{ $user->application->address_2 }}</td>
        </tr>
        <tr>
            <th>State</th>
            <td>{{ $user->application->state }}</td>
            <th>City/District</th>
            <td>{{ $user->application->district }}</td>
        </tr>
        <tr>
            <th>Landmark</th>
            <td>{{ $user->application->landmark }}</td>
            <th>Pincode</th>
            <td colspan="2">{{ $user->application->pincode }}</td>
        </tr>

        <tr>
            <th colspan="4" class="head">Academic Details</th>
        </tr>
        <tr>
            <th class="head inner" colspan="4">12th/Equivalent</th>
        </tr>
        <tr>
            <th>Education Board</th>
            <td>{{ $user->application->intermediate_board_name }}</td>
            <th>School/Institute</th>
            <td>{{ $user->application->intermediate_school_name }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td colspan="3">{{ $user->application->intermediate_qualification_status }}</td>
        </tr>
        @if($user->application->intermediate_qualification_status != 'Appearing')
        <tr>
            <th>Passing Year</th>
            <td>{{ $user->application->intermediate_passing_year }}</td>
            <th>Total Marks</th>
            <td>{{ $user->application->intermediate_total_marks }}</td>
        </tr>
        <tr>
            <th>Obtained Marks</th>
            <td>{{ $user->application->intermediate_obtained_marks }}</td>
            <th>School/Institute</th>
            <td>{{ $user->application->intermediate_percentage_mark }}</td>
        </tr>
        @endif

        <tr>
            <th class="head inner" colspan="4">10th/Equivalent</th>
        </tr>
        <tr>
            <th>Education Board</th>
            <td>{{ $user->application->matric_board_name }}</td>
            <th>School/Institute</th>
            <td>{{ $user->application->matric_school_name }}</td>
        </tr>
        <tr>
            <th>Passing Year</th>
            <td>{{ $user->application->matric_passing_year }}</td>
            <th>Total Marks</th>
            <td>{{ $user->application->matric_total_marks }}</td>
        </tr>
        <tr>
            <th>Obtained Marks</th>
            <td>{{ $user->application->matric_obtained_marks }}</td>
            <th>School/Institute</th>
            <td>{{ $user->application->matric_percentage_mark }}</td>
        </tr>

        <tr>
            <th colspan="4" class="head">Family Details</th>
        </tr>
        <tr>
            <th>Father Occupation</th>
            <td>{{ $user->application->father_occupation ?? 'N/A' }}</td>
            <th>Mother Occupation</th>
            <td>{{ $user->application->mother_occupation }}</td>
        </tr>
        <tr>
            <th>No. of Family Members</th>
            <td>{{ $user->application->family_members ?? 'N/A' }}</td>
            <th>Monthly Income from all Sources</th>
            <td>{{ $user->application->monthly_income }}</td>
        </tr>
        <tr>
            <th>Do you have a Govt. employee in your family?</th>
            <td colspan="3">{{ $user->application->is_govt_department }}</td>
        </tr>

    </table>
    <p class="text-center"><small>***/ Note: This form printed and personal use only ! /---</small></p>

</body>
</html> 
  
