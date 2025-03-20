@extends('app')
@section('title')
Reserver une Table
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('css/reservation/reservation.css') }}">

    <!-- Main Content -->
    <div class="reservation-page">
        <div class="reservation-image-section">
            <div class="image-overlay"></div>
            <img src="{{ asset('images/reservation/reservationBg.png') }}" alt="Table with wine glasses">
            <h2 class="book-table-text">Reservez<br>Une Table</h2>
        </div>
        <div class="reservation-form-section">
            <div class="reservation-container">
                <h1 class="reservation-title">RESERVATION</h1>
                <p class="reservation-subtitle">
                    Réservez votre place chez Nous, où des menus exceptionnels et une expérience culinaire remarquable vous attendent.
                </p>
                <form class="reservation-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" placeholder="my name is..." required>
                        </div>
                        <div class="form-group">
                            <label for="city">City (Optional)</label>
                            <input type="text" id="city" placeholder="I'm from...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" placeholder="(e.g., yourname@email.com)" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="(e.g., 123-456-7890)" required>
                        </div>
                    </div>
                    <div class="form-row date-time-row">
                        <div class="form-group">
                            <label for="guests">Number of Guests</label>
                            <select id="guests" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" id="date" placeholder="mm/dd/yyyy" required>
                        </div>
                        <div class="form-group">
                            <label for="time">Time:</label>
                            <input type="time" id="time" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="special-requests">Special Requests</label>
                        <textarea id="special-requests" placeholder="Celebrating something special? Have any dietary restrictions? Let us know how we can personalize your experience!"></textarea>
                    </div>
                    <button type="submit" class="reservation-button">Faire une reservation</button>
                </form>
            </div>
        </div>
    </div>

@endsection

