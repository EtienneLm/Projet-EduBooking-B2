<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('appointment_choice.css') }}">
    <title>Appointment Choice</title>
</head>
<body>
    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('image/logo_Edubooking-removebg-preview.png') }}" alt="Home" class="home-button-img">
        </a>
        <a href="{{ route('login') }}" class="nav-link button">Login</a> 
    </header>

    <a href="{{ route('student_teacher_choice') }}">&larr; Return</a>
   
    <div class="container">
        <div class="header">
        @if(isset($teacher))
            <h2>You chose {{ $teacher->name }}</h2>
            <p>Here are his availabilities :</p>
            {{--<p>Email: {{ $teacher->email }}</p>--}}
        @else
            <p>No teacher selected.</p>
        @endif
        </div>
        <table>
        <thead>
            <tr>
            <th class="nav">&larr;</th>
            <th colspan="5">Avril</th>
            <th class="nav">&rarr;</th>
            </tr>
            <tr>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td class="empty"></td>
            <td class="empty"></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            </tr>
            <tr>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            </tr>
            <tr>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            </tr>
            <tr>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            </tr>
            <tr>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td class="empty"></td>
            <td class="empty"></td>
            <td class="empty"></td>
            </tr>
        </tbody>
        </table>
    </div>


</body>
</html>
