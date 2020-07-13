<template>
  <div class="container-fluid bg-white p-4">
    <div class="col-12 p-0 my-2">
      <h5 class="py-2" style="font-size: 1.5rem; font-weight:700" id="Booking-section">Bookings</h5>
    </div>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Property type</th>
          <th scope="col">Guests</th>
          <th scope="col">Check-in</th>
          <th scope="col">Check-out</th>
          <th scope="col">No of nights</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>
            Standard Double Room
            <br />
            <b>Sugar Loft Apartments</b>
          </td>
          <td>
            2 Adults
            <br />2 Children
          </td>
          <td>10-07-2020</td>
          <td>11-07-2020</td>
          <td class="text-center">1</td>
          <td>
            <div class="dropdown">
              <button
                class="btn btn-outline-primary btn-block dropdown-toggle p-0"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >Active</button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-info" href="#">Contact owner</a>
                <a class="dropdown-item text-danger" href="#">Cancel the reservation</a>
              </div>
            </div>
          </td>
        </tr>

        <tr class="bg-light">
          <th scope="row">2</th>
          <td>
            Superior Room
            <br />
            <b>The Kingsbury Colombo</b>
          </td>
          <td>
            2 Adults
            <br />0 Children
          </td>
          <td>15-07-2020</td>
          <td>16-07-2020</td>
          <td class="text-center">1</td>
          <td>
            <div class="dropdown">
              <button
                class="btn btn-outline-danger btn-block dropdown-toggle p-0"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >Canceled</button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-info" href="#">Request refund</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>
            Deluxe Twin Room
            <br />
            <b>Mövenpick Hotel Colombo</b>
          </td>
          <td>
            1 Adults
            <br />2 Children
          </td>
          <td>20-07-2020</td>
          <td>21-07-2020</td>
          <td class="text-center">1</td>
          <td>
            <div class="dropdown">
              <button
                class="btn btn-outline-primary btn-block dropdown-toggle p-0"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >Active</button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-info" href="#">Contact owner</a>
                <a class="dropdown-item text-danger" href="#">Cancel the reservation</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  mounted() {}
};
</script>

<style>
.router-active-link {
  background-color: aquamarine;
}
</style>