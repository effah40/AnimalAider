
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Document</title>
</head>

<body>
    <!-- Modal Structure -->
    <div id="videoModal" class="video-modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <video id="introVideo" controls>
                <source src="videos/The Animal Aider Project.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <?php 
       require "connect.php";
       require "upload.php";

       if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        

        $sql = "Insert into volunteers(name,phone,image) values('$name','$phone','$image')";

        $insert = mysqli_query($conn, $sql);

        if ($insert) {
           # header('index.php');
           echo "Is in";
        } else{
            echo "Error somewhere";
        }
       }
    ?>
    <!-- Volunteer Modal -->
  
    <div class="volunteer-modal" id="volunteerModal" style="display: none;">
        <div class="volunteer-modal-content">
            <span class="close-modal" id="closeVolunteerModal">&times;</span>
            <h2>Volunteer Signup</h2>
            <form id="volunteerForm" action="" method= "POST" >
                <div class="form-content">
                    <div class="form-fields">
                        <label for="volunteerName">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="volunteerPhone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" required>

                        <label for="volunteerImage">Upload Image:</label>
                        <input type="file" id="image" name="image" accept="image/*" required>
                    </div>
                    <!-- Image preview section -->
                    <div class="image-preview">
                        <img id="imagePreview" src="" alt="Image Preview" style="display: none;">
                    </div>
                </div>
                <button type="submit" name="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>
    <header class="header">
        <a href="#" class="logo"><img src="images/logo.png"></a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="team.html">About</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#contact">Contact</a>
        </nav>
        <div class="header-buttons">
            <button id="volunteerBtn1">Join as a Volunteer</button>
            <button id="volunteerBtn2">Join</button>
            <button>Support Us</button>
        </div>
    </header>
    <section class="section1" id="home">
        <div class="overlay"></div> <!-- Add an overlay for better text visibility -->
        <div class="home-content load-hidden">
            <h3 class="load-hidden">Every animal deserves</h3>
            <h1>Affection and shouldn't have to go without access to veterinary care.</h1>
            <p class="load-hidden">Most people are unaware of how their animals' health affects them. We're here to fix
                that. We visit
                communities in
                Ghana, provide no-cost animal vaccinations and veterinary services as well as public health education to
                fight disease. By doing this, we strengthen the relationship between people and animals and promote the
                welfare of
                animals.</p>
            <div class="home-buttons">
                <button id="viewIntroBtn1"><span>View Intro<i class='bx bx-play-circle'></i></span></button>
                <button>Explore Now</button>
            </div>
        </div>
        <div class="home-img"></div>
    </section>

    <section class="section2">
        <div class="section2-header">
            <h1>Number <span>Of</span></h1>
        </div>
        <div class="section2-content">
            <div class="numberOf-box">
                <h3>5</h3>
                <p>Number of Outreaches held</p>
            </div>
            <div class="numberOf-box">
                <h3>1114</h3>
                <p>Number Of Animals Reached</p>
                <p>(rabies - 602, PPR - 512)</p>
            </div>
            <div class="numberOf-box">
                <h3>1382</h3>
                <p>Number Of people Educated</p>
            </div>
        </div>
        <!-- <div class="section2-banner" style="
        background-image: url('images/section2-background.png'); 
        background-position: center;
        background-repeat: no-repeat;">
             <div>
                <h3>Who we Are?</h3>
                <p>The Animal Aider Project is run by a team of volunteers who are passionate about improving the
                    quality of animal life
                    and the special bond between humans and animals.</p>
                <div class="home-buttons">
                    <button id="viewIntroBtn2"><span>View Intro<i class='bx bx-play-circle'></i></span></button>
                    <button>Explore Now</button>
                </div>
            </div> 
        </div> -->
    </section>
    <section class="section3">
        <div class="section3-header">
            <div>
                <p>Whats's new?</p>
                <p>Gallery</p>
            </div>
            <div>
                <button id="view-more-pets"><span>View more<i class='bx bx-chevron-right'></i></span></button>
            </div>
        </div>
        <div class="section3-pets-grid">
            <div>
                <img src="images/pet1.png" alt="pet-image">
                <p>MO231 - Pomeranian White</p>
                <p>Gene: Make &#xb7 Age: 2 months</p>
                <p>6.900.000 VND</p>
            </div>
            <div>
                <img src="images/pet2.png" alt="pet-image">
                <p>MO502 - Poodle Tiny Yellow</p>
                <p>Gene: Make &#xb7 Age: 2 months</p>
                <p>6.900.000 VND</p>
            </div>
            <div>
                <img src="images/pet3.png" alt="pet-image">
                <p>MO102 - Poodle Tiny Sepia</p>
                <p>Gene: Make &#xb7 Age: 2 months</p>
                <p>6.900.000 VND</p>
            </div>
            <div>
                <img src="images/pet4.png" alt="pet-image">
                <p>MO512 - Alaskan Malamute Grey</p>
                <p>Gene: Make &#xb7 Age: 2 months</p>
                <p>6.900.000 VND</p>
            </div>
        </div>
    </section>
    <!-- <section class="section4">
        <div class="section4-banner" style="
            background-image: url('images/section4-banner\ \(2\).png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            ">
            <div>
                <h3>What are we doing <svg xmlns="http://www.w3.org/2000/svg" width="42" height="38" viewBox="0 0 42 38"
                        fill="none">
                        <path
                            d="M22.3146 8.51235V8.56143C22.3139 9.5215 22.4822 10.4745 22.8121 11.3785L22.7927 11.3199C23.1133 12.2007 23.6581 12.9867 24.3754 13.6032L24.3818 13.608C25.0618 14.2081 25.9662 14.5739 26.9578 14.5739H27.0353H27.0321C28.3403 14.5666 29.5932 14.0553 30.5205 13.1504C31.5335 12.2387 32.3216 11.1129 32.8251 9.85831L32.8461 9.79813C33.3341 8.61246 33.5911 7.34756 33.6036 6.06903V6.01361C33.6036 5.02552 33.4275 4.07701 33.1061 3.19659L33.1255 3.25518C32.8049 2.37433 32.2601 1.58836 31.5428 0.971801L31.5363 0.96705C30.8065 0.323216 29.853 -0.0223897 28.8716 0.00112587H28.8764C27.5678 0.00661014 26.3142 0.518173 25.388 1.42468C24.3851 2.33632 23.6036 3.45697 23.1011 4.70407L23.0801 4.76424C22.6134 5.87268 22.3372 7.16005 22.3227 8.5076V8.51235H22.3146ZM30.9469 20.4645L30.9452 20.5975C30.9433 21.7882 31.3186 22.9502 32.0192 23.9228L32.0063 23.9038C32.3258 24.3551 32.7519 24.7238 33.2483 24.9786C33.7447 25.2334 34.2965 25.3666 34.8568 25.3669L35.0167 25.3638H35.0086C36.3324 25.3495 37.6047 24.8593 38.5843 23.9861L38.5794 23.9909C39.6215 23.1158 40.4643 22.0357 41.0533 20.8207C41.6423 19.6057 41.9643 18.2829 41.9984 16.9381V16.9254L42 16.7955C42 15.5525 41.6027 14.3997 40.926 13.4544L40.9389 13.4734C40.6065 12.997 40.1556 12.6116 39.6287 12.3539C39.1019 12.0962 38.5167 11.9746 37.9286 12.0008H37.9366C36.6129 12.015 35.3405 12.5053 34.361 13.3784L34.3658 13.3736C33.3222 14.2539 32.4786 15.3392 31.8897 16.5593C31.3007 17.7794 30.9795 19.1071 30.9469 20.4566V20.4676V20.4645ZM20.9968 19.7962C18.6389 19.9224 16.3807 20.7703 14.54 22.2206L14.5626 22.2031C12.3094 23.7721 10.368 25.732 8.83413 27.986L8.78245 28.0668C7.39997 29.8879 6.59202 32.0662 6.45845 34.3326L6.45684 34.3643L6.45361 34.502C6.45361 35.1418 6.61349 35.7467 6.89612 36.2771L6.88643 36.2565C7.1576 36.743 7.58112 37.131 8.09446 37.3634L8.11061 37.3697C8.58058 37.5898 9.12806 37.7624 9.69978 37.859L9.73854 37.8638C10.3347 37.956 10.9374 38.0015 11.5409 38H11.662H11.6556C13.3196 37.892 14.9521 37.503 16.4812 36.8504L16.3875 36.8868C17.8316 36.2694 19.3711 35.8942 20.9419 35.7768L20.9919 35.7736C22.7733 35.9034 24.4238 36.2961 25.9581 36.9121L25.8499 36.8741C27.4497 37.5041 29.1433 37.8753 30.8645 37.973L30.9097 37.9746C33.9955 37.9767 35.5383 36.7738 35.5383 34.3659C35.4684 32.6786 34.9735 31.0346 34.0978 29.5806L34.1252 29.6281C33.1804 27.8858 31.9933 26.2807 30.598 24.8586L30.6045 24.865C29.2407 23.4684 27.6811 22.2693 25.9726 21.3037L25.8725 21.2515C24.4133 20.3588 22.7413 19.856 21.0226 19.7931H21.0032L20.9968 19.7962ZM14.9647 14.5755H15.039C15.9914 14.5765 16.9104 14.2312 17.6182 13.6064L17.6149 13.6096C18.3265 13.0021 18.8689 12.2273 19.1912 11.3579L19.2041 11.3199C19.5245 10.4343 19.6868 9.50111 19.6838 8.56143V8.50918V8.51235C19.6692 7.15847 19.3931 5.87268 18.9005 4.69457L18.9263 4.76424C18.4259 3.49609 17.6385 2.35584 16.6233 1.42943L16.6169 1.42468C15.6904 0.519718 14.4378 0.008873 13.1301 0.00270936H13.0542C12.0625 0.00270936 11.1581 0.370077 10.475 0.971801L10.4782 0.968634C9.77084 1.57511 9.22496 2.34468 8.90196 3.22035L8.88904 3.25835C8.58057 4.08493 8.40292 5.03977 8.40292 6.0342V6.06587V6.06428C8.41691 7.36974 8.68267 8.66081 9.1862 9.86939L9.16037 9.79972C9.66119 11.0748 10.4547 12.2197 11.4795 13.1456L11.486 13.152C12.4137 14.0546 13.6658 14.5641 14.9728 14.5708H14.9744L14.9647 14.5755ZM4.06339 12.0039L3.91481 12.0008C2.73423 12.0008 1.69255 12.5803 1.06916 13.4655L1.06108 13.4766C0.36726 14.4512 -0.00325012 15.6118 1.90735e-05 16.8003L0.00163651 16.9365V16.9301C0.0334435 18.2741 0.353107 19.5966 0.939892 20.8116C1.52668 22.0267 2.36747 23.1071 3.4077 23.983L3.42061 23.9941C4.39863 24.8639 5.6678 25.3523 6.98817 25.3669H6.99141C7.57462 25.3926 8.15499 25.2733 8.67851 25.0199C9.20203 24.7666 9.65169 24.3876 9.98563 23.9181L9.99371 23.907C10.7152 22.8998 11.0867 21.6916 11.0532 20.4613V20.4676C11.0222 19.1189 10.7031 17.7915 10.1164 16.5712C9.52974 15.3509 8.68852 14.2648 7.6471 13.3831L7.63418 13.3721C6.65726 12.5049 5.39077 12.0178 4.07308 12.0023H4.06985L4.06339 12.0039Z"
                            fill="#003459" />
                    </svg></h3>
                <h3>
                    We need help. so do they.
                </h3>
                <p>Increasing veterinary care and coverage and filling these gaps in Ghanaian communities</p>
                <div class="home-buttons">
                    <button><span>View Intro<i class='bx bx-play-circle'></i></span></button>
                    <button>Explore Now</button>
                </div>
            </div>

        </div>
        <div class="section4-footer">
            <div>
                <p>Hard to choose right products for your pets?</p>
                <p>Why are we doing it</p>
            </div>
            <div>
                <button><span>View more<i class='bx bx-chevron-right'></i></span></button>
            </div>
        </div>
    </section> -->
    <!-- <section class="section5">
        <div class="pet-utilities">
            <div class="load-hidden">
                <img src="images/utility-image1.png" alt="">
                <p>To reduce animal Borne Diseases</p>
                <p>Product: Dog food &#xb7 Size: 385g</p>
                <p>140.000 VND</p>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M3.7682 10.1406L5.66663 9.44918C5.72523 9.42578 5.79554 9.41406 5.86581 9.41406H18.0299C18.358 9.41406 18.6158 9.67184 18.6158 10V18.2422C18.6158 19.2148 17.8307 20 16.858 20H5.13925C4.16656 20 3.38144 19.2148 3.38144 18.2422V10.6914C3.38144 10.4453 3.53382 10.2227 3.7682 10.1406Z"
                            fill="#FC1A40" />
                        <path
                            d="M3.38144 10.6914V18.2422C3.38144 19.2148 4.16656 20 5.13925 20H10.9986V9.41406H5.86581C5.7955 9.41406 5.72519 9.42578 5.66663 9.44918L3.7682 10.1406C3.53382 10.2227 3.38144 10.4453 3.38144 10.6914Z"
                            fill="#C60034" />
                        <path
                            d="M3.59238 3.81984C3.79156 3.01124 4.38925 2.37847 5.19785 2.12062C5.99472 1.87449 6.85023 2.05031 7.47129 2.61277L8.8307 3.80812L9.10019 2.01519C9.2291 1.19488 9.75644 0.50343 10.5416 0.175344C10.6939 0.116712 10.8462 0.0698366 10.9986 0.0463991C11.6431 -0.0825072 12.3111 0.0581178 12.8502 0.456594C13.565 0.972219 13.9283 1.83941 13.8111 2.70656C13.6822 3.57374 13.0962 4.31202 12.2643 4.60499L10.9986 5.06202L9.44 5.63624C9.42828 5.63624 9.42828 5.63624 9.42828 5.63624L6.72125 6.6323C6.45175 6.72609 6.1705 6.773 5.90097 6.773C5.32668 6.773 4.76421 6.56199 4.3189 6.16359C3.66269 5.57765 3.38144 4.67527 3.59238 3.81984Z"
                            fill="#FE9923" />
                        <path
                            d="M4.31894 6.16361C4.76425 6.56201 5.32675 6.77303 5.90101 6.77303C6.1705 6.77303 6.45175 6.72611 6.72128 6.63232L9.42831 5.63627C9.42831 5.63627 9.42831 5.63627 9.44003 5.63627L10.9986 5.06205V0.0463867C10.8463 0.0698633 10.6939 0.116699 10.5416 0.175332C9.75648 0.503418 9.2291 1.19486 9.10023 2.01518L8.83074 3.80811L7.47132 2.61275C6.85027 2.05029 5.99476 1.87447 5.19788 2.12061C4.38929 2.37846 3.79163 3.01123 3.59242 3.81982C3.38144 4.67529 3.66269 5.57768 4.31894 6.16361Z"
                            fill="#FE8821" />
                        <path
                            d="M1.37755 9.1445L2.17443 11.3476C2.26821 11.582 2.49087 11.7226 2.72524 11.7226C2.79556 11.7226 2.86587 11.7109 2.92442 11.6875L8.98306 9.48439L9.5338 7.66798L10.9986 7.99607L12.2877 8.28904L18.3463 6.08591C18.651 5.96876 18.8033 5.62888 18.6979 5.33591L17.8893 3.13286C17.7369 2.68755 17.4088 2.33591 16.9869 2.13673C16.565 1.93755 16.0846 1.91408 15.6393 2.07814L10.9986 3.76564L10.6822 3.88279C10.6822 3.88279 9.41657 6.1797 9.38138 6.1797C9.3579 6.1797 8.85403 5.89845 8.36185 5.62888C7.86978 5.35935 7.37755 5.07814 7.37755 5.07814L2.43228 6.88279C1.98696 7.04685 1.6354 7.37501 1.43622 7.79689C1.23693 8.21872 1.21353 8.69923 1.37755 9.1445Z"
                            fill="#FF3E75" />
                        <path
                            d="M1.37753 9.14449L2.17441 11.3476C2.2682 11.582 2.49085 11.7226 2.72523 11.7226C2.79554 11.7226 2.86585 11.7109 2.92441 11.6875L8.98304 9.48438L9.53378 7.66797L10.9986 7.99605V3.76562L10.6822 3.88277C10.6822 3.88277 9.4166 6.17969 9.3814 6.17969C9.35792 6.17969 8.85406 5.89844 8.36187 5.62887C7.86976 5.35934 7.37753 5.07812 7.37753 5.07812L2.43226 6.88277C1.98695 7.04684 1.63538 7.375 1.4362 7.79688C1.23691 8.21871 1.21351 8.69922 1.37753 9.14449Z"
                            fill="#FC1A40" />
                        <path d="M12.7564 9.41406V20H9.24081V9.41406H12.7564Z" fill="#FCBF29" />
                        <path
                            d="M10.6822 3.88281L10.9987 4.75L12.2877 8.2891L10.9987 8.75789L9.53382 9.28523L8.98308 9.48441L7.37753 5.07816L10.6822 3.88281Z"
                            fill="#FCBF29" />
                        <path d="M9.24066 9.41406H10.9985V20H9.24066V9.41406Z" fill="#FE9923" />
                        <path
                            d="M7.37753 5.07816L8.98304 9.48441L9.53378 9.2852L10.9986 8.75785V4.75L10.6822 3.88281L7.37753 5.07816Z"
                            fill="#FE9923" />
                    </svg>
                    <p>
                        &#xb7 Free Toy & Free Shaker
                    </p>
                </div>
            </div>
            <div class="load-hidden">
                <img src="images/utility-image2.png" alt="">
                <p>To reduce animal Borne Diseases</p>
                <p>Product: Dog food &#xb7 Size: 385g</p>
                <p>140.000 VND</p>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M3.7682 10.1406L5.66663 9.44918C5.72523 9.42578 5.79554 9.41406 5.86581 9.41406H18.0299C18.358 9.41406 18.6158 9.67184 18.6158 10V18.2422C18.6158 19.2148 17.8307 20 16.858 20H5.13925C4.16656 20 3.38144 19.2148 3.38144 18.2422V10.6914C3.38144 10.4453 3.53382 10.2227 3.7682 10.1406Z"
                            fill="#FC1A40" />
                        <path
                            d="M3.38144 10.6914V18.2422C3.38144 19.2148 4.16656 20 5.13925 20H10.9986V9.41406H5.86581C5.7955 9.41406 5.72519 9.42578 5.66663 9.44918L3.7682 10.1406C3.53382 10.2227 3.38144 10.4453 3.38144 10.6914Z"
                            fill="#C60034" />
                        <path
                            d="M3.59238 3.81984C3.79156 3.01124 4.38925 2.37847 5.19785 2.12062C5.99472 1.87449 6.85023 2.05031 7.47129 2.61277L8.8307 3.80812L9.10019 2.01519C9.2291 1.19488 9.75644 0.50343 10.5416 0.175344C10.6939 0.116712 10.8462 0.0698366 10.9986 0.0463991C11.6431 -0.0825072 12.3111 0.0581178 12.8502 0.456594C13.565 0.972219 13.9283 1.83941 13.8111 2.70656C13.6822 3.57374 13.0962 4.31202 12.2643 4.60499L10.9986 5.06202L9.44 5.63624C9.42828 5.63624 9.42828 5.63624 9.42828 5.63624L6.72125 6.6323C6.45175 6.72609 6.1705 6.773 5.90097 6.773C5.32668 6.773 4.76421 6.56199 4.3189 6.16359C3.66269 5.57765 3.38144 4.67527 3.59238 3.81984Z"
                            fill="#FE9923" />
                        <path
                            d="M4.31894 6.16361C4.76425 6.56201 5.32675 6.77303 5.90101 6.77303C6.1705 6.77303 6.45175 6.72611 6.72128 6.63232L9.42831 5.63627C9.42831 5.63627 9.42831 5.63627 9.44003 5.63627L10.9986 5.06205V0.0463867C10.8463 0.0698633 10.6939 0.116699 10.5416 0.175332C9.75648 0.503418 9.2291 1.19486 9.10023 2.01518L8.83074 3.80811L7.47132 2.61275C6.85027 2.05029 5.99476 1.87447 5.19788 2.12061C4.38929 2.37846 3.79163 3.01123 3.59242 3.81982C3.38144 4.67529 3.66269 5.57768 4.31894 6.16361Z"
                            fill="#FE8821" />
                        <path
                            d="M1.37755 9.1445L2.17443 11.3476C2.26821 11.582 2.49087 11.7226 2.72524 11.7226C2.79556 11.7226 2.86587 11.7109 2.92442 11.6875L8.98306 9.48439L9.5338 7.66798L10.9986 7.99607L12.2877 8.28904L18.3463 6.08591C18.651 5.96876 18.8033 5.62888 18.6979 5.33591L17.8893 3.13286C17.7369 2.68755 17.4088 2.33591 16.9869 2.13673C16.565 1.93755 16.0846 1.91408 15.6393 2.07814L10.9986 3.76564L10.6822 3.88279C10.6822 3.88279 9.41657 6.1797 9.38138 6.1797C9.3579 6.1797 8.85403 5.89845 8.36185 5.62888C7.86978 5.35935 7.37755 5.07814 7.37755 5.07814L2.43228 6.88279C1.98696 7.04685 1.6354 7.37501 1.43622 7.79689C1.23693 8.21872 1.21353 8.69923 1.37755 9.1445Z"
                            fill="#FF3E75" />
                        <path
                            d="M1.37753 9.14449L2.17441 11.3476C2.2682 11.582 2.49085 11.7226 2.72523 11.7226C2.79554 11.7226 2.86585 11.7109 2.92441 11.6875L8.98304 9.48438L9.53378 7.66797L10.9986 7.99605V3.76562L10.6822 3.88277C10.6822 3.88277 9.4166 6.17969 9.3814 6.17969C9.35792 6.17969 8.85406 5.89844 8.36187 5.62887C7.86976 5.35934 7.37753 5.07812 7.37753 5.07812L2.43226 6.88277C1.98695 7.04684 1.63538 7.375 1.4362 7.79688C1.23691 8.21871 1.21351 8.69922 1.37753 9.14449Z"
                            fill="#FC1A40" />
                        <path d="M12.7564 9.41406V20H9.24081V9.41406H12.7564Z" fill="#FCBF29" />
                        <path
                            d="M10.6822 3.88281L10.9987 4.75L12.2877 8.2891L10.9987 8.75789L9.53382 9.28523L8.98308 9.48441L7.37753 5.07816L10.6822 3.88281Z"
                            fill="#FCBF29" />
                        <path d="M9.24066 9.41406H10.9985V20H9.24066V9.41406Z" fill="#FE9923" />
                        <path
                            d="M7.37753 5.07816L8.98304 9.48441L9.53378 9.2852L10.9986 8.75785V4.75L10.6822 3.88281L7.37753 5.07816Z"
                            fill="#FE9923" />
                    </svg>
                    <p>
                        &#xb7 Free Toy & Free Shaker
                    </p>
                </div>
            </div>
            <div class="load-hidden">
                <img src="images/utility-image3.png" alt="">
                <p>To reduce animal Borne Diseases</p>
                <p>Product: Dog food &#xb7 Size: 385g</p>
                <p>140.000 VND</p>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M3.7682 10.1406L5.66663 9.44918C5.72523 9.42578 5.79554 9.41406 5.86581 9.41406H18.0299C18.358 9.41406 18.6158 9.67184 18.6158 10V18.2422C18.6158 19.2148 17.8307 20 16.858 20H5.13925C4.16656 20 3.38144 19.2148 3.38144 18.2422V10.6914C3.38144 10.4453 3.53382 10.2227 3.7682 10.1406Z"
                            fill="#FC1A40" />
                        <path
                            d="M3.38144 10.6914V18.2422C3.38144 19.2148 4.16656 20 5.13925 20H10.9986V9.41406H5.86581C5.7955 9.41406 5.72519 9.42578 5.66663 9.44918L3.7682 10.1406C3.53382 10.2227 3.38144 10.4453 3.38144 10.6914Z"
                            fill="#C60034" />
                        <path
                            d="M3.59238 3.81984C3.79156 3.01124 4.38925 2.37847 5.19785 2.12062C5.99472 1.87449 6.85023 2.05031 7.47129 2.61277L8.8307 3.80812L9.10019 2.01519C9.2291 1.19488 9.75644 0.50343 10.5416 0.175344C10.6939 0.116712 10.8462 0.0698366 10.9986 0.0463991C11.6431 -0.0825072 12.3111 0.0581178 12.8502 0.456594C13.565 0.972219 13.9283 1.83941 13.8111 2.70656C13.6822 3.57374 13.0962 4.31202 12.2643 4.60499L10.9986 5.06202L9.44 5.63624C9.42828 5.63624 9.42828 5.63624 9.42828 5.63624L6.72125 6.6323C6.45175 6.72609 6.1705 6.773 5.90097 6.773C5.32668 6.773 4.76421 6.56199 4.3189 6.16359C3.66269 5.57765 3.38144 4.67527 3.59238 3.81984Z"
                            fill="#FE9923" />
                        <path
                            d="M4.31894 6.16361C4.76425 6.56201 5.32675 6.77303 5.90101 6.77303C6.1705 6.77303 6.45175 6.72611 6.72128 6.63232L9.42831 5.63627C9.42831 5.63627 9.42831 5.63627 9.44003 5.63627L10.9986 5.06205V0.0463867C10.8463 0.0698633 10.6939 0.116699 10.5416 0.175332C9.75648 0.503418 9.2291 1.19486 9.10023 2.01518L8.83074 3.80811L7.47132 2.61275C6.85027 2.05029 5.99476 1.87447 5.19788 2.12061C4.38929 2.37846 3.79163 3.01123 3.59242 3.81982C3.38144 4.67529 3.66269 5.57768 4.31894 6.16361Z"
                            fill="#FE8821" />
                        <path
                            d="M1.37755 9.1445L2.17443 11.3476C2.26821 11.582 2.49087 11.7226 2.72524 11.7226C2.79556 11.7226 2.86587 11.7109 2.92442 11.6875L8.98306 9.48439L9.5338 7.66798L10.9986 7.99607L12.2877 8.28904L18.3463 6.08591C18.651 5.96876 18.8033 5.62888 18.6979 5.33591L17.8893 3.13286C17.7369 2.68755 17.4088 2.33591 16.9869 2.13673C16.565 1.93755 16.0846 1.91408 15.6393 2.07814L10.9986 3.76564L10.6822 3.88279C10.6822 3.88279 9.41657 6.1797 9.38138 6.1797C9.3579 6.1797 8.85403 5.89845 8.36185 5.62888C7.86978 5.35935 7.37755 5.07814 7.37755 5.07814L2.43228 6.88279C1.98696 7.04685 1.6354 7.37501 1.43622 7.79689C1.23693 8.21872 1.21353 8.69923 1.37755 9.1445Z"
                            fill="#FF3E75" />
                        <path
                            d="M1.37753 9.14449L2.17441 11.3476C2.2682 11.582 2.49085 11.7226 2.72523 11.7226C2.79554 11.7226 2.86585 11.7109 2.92441 11.6875L8.98304 9.48438L9.53378 7.66797L10.9986 7.99605V3.76562L10.6822 3.88277C10.6822 3.88277 9.4166 6.17969 9.3814 6.17969C9.35792 6.17969 8.85406 5.89844 8.36187 5.62887C7.86976 5.35934 7.37753 5.07812 7.37753 5.07812L2.43226 6.88277C1.98695 7.04684 1.63538 7.375 1.4362 7.79688C1.23691 8.21871 1.21351 8.69922 1.37753 9.14449Z"
                            fill="#FC1A40" />
                        <path d="M12.7564 9.41406V20H9.24081V9.41406H12.7564Z" fill="#FCBF29" />
                        <path
                            d="M10.6822 3.88281L10.9987 4.75L12.2877 8.2891L10.9987 8.75789L9.53382 9.28523L8.98308 9.48441L7.37753 5.07816L10.6822 3.88281Z"
                            fill="#FCBF29" />
                        <path d="M9.24066 9.41406H10.9985V20H9.24066V9.41406Z" fill="#FE9923" />
                        <path
                            d="M7.37753 5.07816L8.98304 9.48441L9.53378 9.2852L10.9986 8.75785V4.75L10.6822 3.88281L7.37753 5.07816Z"
                            fill="#FE9923" />
                    </svg>
                    <p>
                        &#xb7 Free Toy & Free Shaker
                    </p>
                </div>
            </div>
        </div>
    <div class="section5-banner" style="
        background-image: url('images/section4-banner\ \(2\).png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        ">
            <div>
                <h3>What are we doing <svg xmlns="http://www.w3.org/2000/svg" width="42" height="38" viewBox="0 0 42 38"
                        fill="none">
                        <path
                            d="M22.3146 8.51235V8.56143C22.3139 9.5215 22.4822 10.4745 22.8121 11.3785L22.7927 11.3199C23.1133 12.2007 23.6581 12.9867 24.3754 13.6032L24.3818 13.608C25.0618 14.2081 25.9662 14.5739 26.9578 14.5739H27.0353H27.0321C28.3403 14.5666 29.5932 14.0553 30.5205 13.1504C31.5335 12.2387 32.3216 11.1129 32.8251 9.85831L32.8461 9.79813C33.3341 8.61246 33.5911 7.34756 33.6036 6.06903V6.01361C33.6036 5.02552 33.4275 4.07701 33.1061 3.19659L33.1255 3.25518C32.8049 2.37433 32.2601 1.58836 31.5428 0.971801L31.5363 0.96705C30.8065 0.323216 29.853 -0.0223897 28.8716 0.00112587H28.8764C27.5678 0.00661014 26.3142 0.518173 25.388 1.42468C24.3851 2.33632 23.6036 3.45697 23.1011 4.70407L23.0801 4.76424C22.6134 5.87268 22.3372 7.16005 22.3227 8.5076V8.51235H22.3146ZM30.9469 20.4645L30.9452 20.5975C30.9433 21.7882 31.3186 22.9502 32.0192 23.9228L32.0063 23.9038C32.3258 24.3551 32.7519 24.7238 33.2483 24.9786C33.7447 25.2334 34.2965 25.3666 34.8568 25.3669L35.0167 25.3638H35.0086C36.3324 25.3495 37.6047 24.8593 38.5843 23.9861L38.5794 23.9909C39.6215 23.1158 40.4643 22.0357 41.0533 20.8207C41.6423 19.6057 41.9643 18.2829 41.9984 16.9381V16.9254L42 16.7955C42 15.5525 41.6027 14.3997 40.926 13.4544L40.9389 13.4734C40.6065 12.997 40.1556 12.6116 39.6287 12.3539C39.1019 12.0962 38.5167 11.9746 37.9286 12.0008H37.9366C36.6129 12.015 35.3405 12.5053 34.361 13.3784L34.3658 13.3736C33.3222 14.2539 32.4786 15.3392 31.8897 16.5593C31.3007 17.7794 30.9795 19.1071 30.9469 20.4566V20.4676V20.4645ZM20.9968 19.7962C18.6389 19.9224 16.3807 20.7703 14.54 22.2206L14.5626 22.2031C12.3094 23.7721 10.368 25.732 8.83413 27.986L8.78245 28.0668C7.39997 29.8879 6.59202 32.0662 6.45845 34.3326L6.45684 34.3643L6.45361 34.502C6.45361 35.1418 6.61349 35.7467 6.89612 36.2771L6.88643 36.2565C7.1576 36.743 7.58112 37.131 8.09446 37.3634L8.11061 37.3697C8.58058 37.5898 9.12806 37.7624 9.69978 37.859L9.73854 37.8638C10.3347 37.956 10.9374 38.0015 11.5409 38H11.662H11.6556C13.3196 37.892 14.9521 37.503 16.4812 36.8504L16.3875 36.8868C17.8316 36.2694 19.3711 35.8942 20.9419 35.7768L20.9919 35.7736C22.7733 35.9034 24.4238 36.2961 25.9581 36.9121L25.8499 36.8741C27.4497 37.5041 29.1433 37.8753 30.8645 37.973L30.9097 37.9746C33.9955 37.9767 35.5383 36.7738 35.5383 34.3659C35.4684 32.6786 34.9735 31.0346 34.0978 29.5806L34.1252 29.6281C33.1804 27.8858 31.9933 26.2807 30.598 24.8586L30.6045 24.865C29.2407 23.4684 27.6811 22.2693 25.9726 21.3037L25.8725 21.2515C24.4133 20.3588 22.7413 19.856 21.0226 19.7931H21.0032L20.9968 19.7962ZM14.9647 14.5755H15.039C15.9914 14.5765 16.9104 14.2312 17.6182 13.6064L17.6149 13.6096C18.3265 13.0021 18.8689 12.2273 19.1912 11.3579L19.2041 11.3199C19.5245 10.4343 19.6868 9.50111 19.6838 8.56143V8.50918V8.51235C19.6692 7.15847 19.3931 5.87268 18.9005 4.69457L18.9263 4.76424C18.4259 3.49609 17.6385 2.35584 16.6233 1.42943L16.6169 1.42468C15.6904 0.519718 14.4378 0.008873 13.1301 0.00270936H13.0542C12.0625 0.00270936 11.1581 0.370077 10.475 0.971801L10.4782 0.968634C9.77084 1.57511 9.22496 2.34468 8.90196 3.22035L8.88904 3.25835C8.58057 4.08493 8.40292 5.03977 8.40292 6.0342V6.06587V6.06428C8.41691 7.36974 8.68267 8.66081 9.1862 9.86939L9.16037 9.79972C9.66119 11.0748 10.4547 12.2197 11.4795 13.1456L11.486 13.152C12.4137 14.0546 13.6658 14.5641 14.9728 14.5708H14.9744L14.9647 14.5755ZM4.06339 12.0039L3.91481 12.0008C2.73423 12.0008 1.69255 12.5803 1.06916 13.4655L1.06108 13.4766C0.36726 14.4512 -0.00325012 15.6118 1.90735e-05 16.8003L0.00163651 16.9365V16.9301C0.0334435 18.2741 0.353107 19.5966 0.939892 20.8116C1.52668 22.0267 2.36747 23.1071 3.4077 23.983L3.42061 23.9941C4.39863 24.8639 5.6678 25.3523 6.98817 25.3669H6.99141C7.57462 25.3926 8.15499 25.2733 8.67851 25.0199C9.20203 24.7666 9.65169 24.3876 9.98563 23.9181L9.99371 23.907C10.7152 22.8998 11.0867 21.6916 11.0532 20.4613V20.4676C11.0222 19.1189 10.7031 17.7915 10.1164 16.5712C9.52974 15.3509 8.68852 14.2648 7.6471 13.3831L7.63418 13.3721C6.65726 12.5049 5.39077 12.0178 4.07308 12.0023H4.06985L4.06339 12.0039Z"
                            fill="#003459" />
                    </svg></h3>
                <h3>
                    We need help. so do they.
                </h3>
                <p>Increasing veterinary care and coverage and filling these gaps in Ghanaian communities</p>
                <div class="home-buttons">
                    <button><span>View Intro<i class='bx bx-play-circle'></i></span></button>
                    <button>Explore Now</button>
                </div>
            </div>
        </div> 
    </section> -->
    <section class="section6">
        <div class="section6-header">
            <p>You already know ?</p>
            <p>Our Outreach Programmes</p>
        </div>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="images/event1.jpg">
            </div>

            <div class="portfolio-box">
                <img src="images/event2.jpg">
            </div>

            <div class="portfolio-box">
                <img src="images/event2.jpg">
            </div>
        </div>
        <div class="section6-header">
            <p>You already know ?</p>
            <p>volunteers</p>
        </div>
        <!-- <div class="volunteers-box">
            <div class="load-hidden">
                <div><img src="images/people/IMG_20240725_095504_326.jpg" alt=""></div>
                <div>
                    <p>Emmanuel</p>
                    <p>Boateng</p>
                </div>
            </div>
            <div class="load-hidden">
                <div><img src="images/people/IMG_20240725_095611_788.jpg" alt=""></div>
                <div>
                    <p>Emmanuel</p>
                    <p>Boateng</p>
                </div>
            </div>
            <div class="load-hidden">
                <div><img src="images/people/IMG_20240725_095606_642.jpg" alt=""></div>
                <div>
                    <p>Emmanuel</p>
                    <p>Boateng</p>
                </div>
            </div>
            <div class="load-hidden">
                <div><img src="images/people/IMG_20240725_095504_326.jpg" alt=""></div>
                <div>
                    <p>Emmanuel</p>
                    <p>Boateng</p>
                </div>
            </div>
        </div> -->
        <div class="volunteer-button">
            <button id="volunteerBtn3">JOIN AS A VOLUNTEER &#128155;</button>
            <button id="meet-the-team">MEET THE TEAM👨‍👩‍👧‍👦</button>
        </div>
    </section>
    <section class="testimonials" id="testimonials">
        <div class="testimonial-title">
            <h4>TESTIMONIALS</h4>
            <h2>What People Say About Us.</h2>

            <!-- Dots under the title -->
            <div class="dots" id="dots-container"></div>
        </div>

<?php
$sql =  "SELECT v.name,v.image,t.v_id, t.message
FROM volunteers AS v, testimonials AS t 
where v.id = t.v_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="testimonial-container" id="testimonial-container">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="testimonial-content active">';
        echo '<img src="' . $row["image"] . '" alt="User Image" class="testimonial-image">';
        echo '<div class="testimonial-text">';
        echo '<div><p>"' . $row["message"] . '"</p></div>';
        echo '<div><h4>' . $row["name"] . ',</h4></div>';
        echo '</div></div>';
    }
    echo '</div>';
} else {
    echo "0 results";
}   
?>
        <!-- <div class="testimonial-container" id="testimonial-container">
            <div class="testimonial-content active">
                <img src="images/people/IMG_20240725_095504_326.jpg" alt="User Image" class="testimonial-image">
                <div class="testimonial-text">
                    <div>
                        <p>"IonApp has truly revolutionized the way we manage our laundry business at City Laundry."</p>
                    </div>
                    <div>
                        <h4>Emmanuel Djokoto,</h4>
                        <span>CEO of City Laundry</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-content next">
                <img src="images/people/IMG_20240725_095518_225.jpeg" alt="User Image" class="testimonial-image">
                <div class="testimonial-text">
                    <div>
                        <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eius vel sed in possimus optio
                            sit? Quo nobis asperiores
                            placeat voluptate eos laborum minus tempora, velit ratione accusantium ullam id deserunt
                            tenetur ad, doloremque, magni
                            maiores quibusdam dolores. Dolor, natus."</p>
                    </div>
                    <div>
                        <h4>Emmanuel Djokoto,</h4>
                        <span>CEO of City Laundry</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-content next">
                <img src="images/people/IMG_20240725_095527_737.jpg" alt="User Image" class="testimonial-image">
                <div class="testimonial-text">
                    <div>
                        <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eius vel sed in possimus optio
                            sit? Quo nobis asperiores
                            placeat voluptate eos laborum minus tempora, velit ratione accusantium ullam id deserunt
                            tenetur ad, doloremque, magni
                            maiores quibusdam dolores. Dolor, natus."</p>
                    </div>
                    <div>
                        <h4>Emmanuel Djokoto,</h4>
                        <span>CEO of City Laundry</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-content next">
                <img src="images/people/IMG_20240725_095552_049.jpg" alt="User Image" class="testimonial-image">
                <div class="testimonial-text">
                    <div>
                        <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eius vel sed in possimus optio
                            sit? Quo nobis asperiores placeat voluptate eos laborum minus tempora, velit ratione
                            accusantium ullam id deserunt tenetur ad, doloremque, magni maiores quibusdam dolores.
                            Dolor, natus."</p>
                    </div>
                    <div>
                        <h4>Emmanuel Djokoto,</h4>
                        <span>CEO of City Laundry</span>
                    </div>
                </div>
            </div> 

            !-- Add more testimonials here if needed --
        </div> -->

        <div class="arrows">
            <i class='bx bx-chevron-up arrow up' onclick="prevTestimonial()"></i>
            <i class='bx bx-chevron-down arrow down' onclick="nextTestimonial()"></i>
        </div>
    </section>
    <div class="testimonial-buttons">
        <button>View more <span>></span></button>
    </div>
    <footer>
        <div class="badges">
            <img src="images/badge/badge1.jpg" alt="">
            <img src="images/badge/badge2.png" alt="">
        </div>
        <div class="socials">
            <nav class="navbar">
                <a href="#home" class="active">Home</a>
                <a href="team.html">About</a>
                <a href="#contact">Contact</a>
            </nav>
            <div>
                <a href="https://m.facebook.com/TheAnimalAider/" target="_blank">
                    <i class='bx bxl-facebook-square'></i>
                </a>
                <a href="https://x.com/theanimalaider" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100%"
                        viewBox="0 0 30 30">
                        <path
                            d="M26.37,26l-8.795-12.822l0.015,0.012L25.52,4h-2.65l-6.46,7.48L11.28,4H4.33l8.211,11.971L12.54,15.97L3.88,26h2.65 l7.182-8.322L19.42,26H26.37z M10.23,6l12.34,18h-2.1L8.12,6H10.23z">
                        </path>
                    </svg>
                </a>
                <a href="https://www.threads.net/@theanimalaider" target="_blank">
                    <svg aria-label="Threads" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg">
                        <path class="x19hqcy"
                            d="M141.537 88.9883C140.71 88.5919 139.87 88.2104 139.019 87.8451C137.537 60.5382 122.616 44.905 97.5619 44.745C97.4484 44.7443 97.3355 44.7443 97.222 44.7443C82.2364 44.7443 69.7731 51.1409 62.102 62.7807L75.881 72.2328C81.6116 63.5383 90.6052 61.6848 97.2286 61.6848C97.3051 61.6848 97.3819 61.6848 97.4576 61.6855C105.707 61.7381 111.932 64.1366 115.961 68.814C118.893 72.2193 120.854 76.925 121.825 82.8638C114.511 81.6207 106.601 81.2385 98.145 81.7233C74.3247 83.0954 59.0111 96.9879 60.0396 116.292C60.5615 126.084 65.4397 134.508 73.775 140.011C80.8224 144.663 89.899 146.938 99.3323 146.423C111.79 145.74 121.563 140.987 128.381 132.296C133.559 125.696 136.834 117.143 138.28 106.366C144.217 109.949 148.617 114.664 151.047 120.332C155.179 129.967 155.42 145.8 142.501 158.708C131.182 170.016 117.576 174.908 97.0135 175.059C74.2042 174.89 56.9538 167.575 45.7381 153.317C35.2355 139.966 29.8077 120.682 29.6052 96C29.8077 71.3178 35.2355 52.0336 45.7381 38.6827C56.9538 24.4249 74.2039 17.11 97.0132 16.9405C119.988 17.1113 137.539 24.4614 149.184 38.788C154.894 45.8136 159.199 54.6488 162.037 64.9503L178.184 60.6422C174.744 47.9622 169.331 37.0357 161.965 27.974C147.036 9.60668 125.202 0.195148 97.0695 0H96.9569C68.8816 0.19447 47.2921 9.6418 32.7883 28.0793C19.8819 44.4864 13.2244 67.3157 13.0007 95.9325L13 96L13.0007 96.0675C13.2244 124.684 19.8819 147.514 32.7883 163.921C47.2921 182.358 68.8816 191.806 96.9569 192H97.0695C122.03 191.827 139.624 185.292 154.118 170.811C173.081 151.866 172.51 128.119 166.26 113.541C161.776 103.087 153.227 94.5962 141.537 88.9883ZM98.4405 129.507C88.0005 130.095 77.1544 125.409 76.6196 115.372C76.2232 107.93 81.9158 99.626 99.0812 98.6368C101.047 98.5234 102.976 98.468 104.871 98.468C111.106 98.468 116.939 99.0737 122.242 100.233C120.264 124.935 108.662 128.946 98.4405 129.507Z">
                        </path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/the-animal-aider" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100%"
                        viewBox="0 0 50 50">
                        <path
                            d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z">
                        </path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/theanimalaider" target="_blank">
                    <i class='bx bxl-instagram'></i>
                </a>

            </div>
        </div>
        <div class="copyright-info">
            <div>
                <p>@The Animal Aider Project</p>
            </div>
            <div>
                <p>Terms of Service</p>
                <p>Privacy Policy</p>
            </div>
        </div>
    </footer>
    <div class="edit-modal" id="editModal" style="display: none;">
        <section class="edit-content">
            <span class="close-btn" id="closeModal">&times;</span>
            <div>
                <img src="" alt="" id="modalImage">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum enim est iste dolorum eaque unde
                        magni sed consectetur veritatis. Doloribus maxime sit cum? Repellat, recusandae, reprehenderit
                        obcaecati esse eos facere, amet debitis perferendis vitae et minima possimus veritatis
                        temporibus tempore quisquam aut earum. Ab ducimus voluptatum ea ex alias vero atque accusamus
                        quidem sequi, eius sapiente consequatur accusantium aspernatur quo iusto eum voluptas nisi, unde
                        nesciunt. Necessitatibus amet dicta deserunt? Itaque dolorem numquam suscipit at autem sequi,
                        maxime ullam quibusdam fugiat ut? Animi commodi sed perspiciatis sint similique atque labore
                        minima repudiandae praesentium harum nesciunt quo, odio hic omnis maxime?</p>
                </div>
            </div>
        </section>
    </div>
    <a href="#home" class="back-to-home"><i class='bx bx-up-arrow-alt'></i></a>
    <script src="scripts/testimonial-script.js"></script>
    <script src="scripts/video-script.js"></script>
    <script src="scripts/script.js"></script>
    <script>
        document.getElementById("meet-the-team").addEventListener("click", function () {
            window.location.href = "team.html";
        });

        document.querySelector(".testimonial-buttons button").addEventListener("click", function () {
            window.location.href = "testimonials.html";
        });

        document.getElementById("view-more-pets").addEventListener("click", function () {
            window.location.href = "pets.html";
        });

        document.getElementById('image').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
            const preview = document.getElementById('imagePreview');
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    });
    </script>



</body>

</html>