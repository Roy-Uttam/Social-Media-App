<!DOCTYPE html>
<html>
    <head>
        <title>FaceBook - The Social Network</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <style>
            .signup-form{
                background: rgba(255,255,255,1);
                padding: 10px 20px;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
            }
        </style>

    </head>
    <body>
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo">
                            <h1>FaceBook</h1>
                        </div>
                    </div>
                    <div class="col-sm-8 pull-right">
                        <div class="inline-form pull-right">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <input type="text" name="user_email" placeholder="Email Address"/>
                                <input type="password" name="user_email" placeholder="Password"/>
                                <input type="submit" value="Login" class="btn btn-primary"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="pull-left text-center col-sm-7">
                        <div style="display:none">
                            <h3 class="text-primary">FaceBook-Clone helps you connect and share with the people in your life.</h3>
                            <img src="assets/imgs/globe.png" class="img-responsive"/>
                        </div>
                    </div>
                    <div class="row justify-content-end" >
                        <div class=" col-sm-6">
                            <div class="signup-form">
                                <h1>Create a new account</h1>
                                <form action="{{ route('saveregister')}}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <input type="text" placeholder="First Name" name="fname" class="input-lg col-sm-6" value="{{ old('fname')}}" />
                                        @error('fname')
                                        <div class="alert alert-danger">{{$message}}</div>  
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Last Name" name="lname" class="input-lg col-sm-6" value="{{ old('lname')}}"/>
                                        @error('lname')
                                        <div class="alert alert-danger">{{$message}}</div>  
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email Address" name="email" value="{{ old('email')}}" class="input-lg col-sm-12"/>
                                        @error('email')
                                        <div class="alert alert-danger">{{$message}}</div>  
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="New Password" name="password" value="{{ old('password')}}" class="input-lg col-sm-12"/>
                                        @error('password')
                                        <div class="alert alert-danger">{{$message}}</div>  
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{ old('password')}}" class="input-lg col-sm-12"/>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-4">
                                            <input type="radio" name="sex" value="male" id="sex_male">
                                            <label for="sex_male" class="input-lg">Male </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="radio" name="sex" value="female" id="sex_female">
                                            <label for="sex_female" class="input-lg">Female </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h4 >Birthday</h4>
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="input-lg" name="day">
                                                    <option value="{{ old('day')}}" selected="selected">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                                </select>
                                                @error('day')
                                                <div class="alert alert-danger">{{$message}}</div>  
                                                @enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="input-lg" name="month"><option value="{{ old('month')}}" selected="selected">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sept</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
                                                @error('month')
                                                <div class="alert alert-danger">{{$message}}</div>  
                                                @enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="input-lg" name="year"><option value="{{ old('year')}}" selected="1">Year</option><option value="2021">2021</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
                                                @error('year')
                                                <div class="alert alert-danger">{{$message}}</div>  
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <small class="text-mute">By clicking Create Account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy. You may receive SMS message notifications from FaceClone and can opt out at any time.</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Create Account" class="btn btn-primary input-lg"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        &copy; FaceBook 2021.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
