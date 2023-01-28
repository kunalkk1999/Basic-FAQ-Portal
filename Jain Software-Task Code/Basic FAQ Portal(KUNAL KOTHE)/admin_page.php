<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

<!-- faq section  -->

<body class="bg-gray-100 font-display">
      <div class="">
         <div class="">
            <div class="py-12 bg-indigo-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
               <div class="cursor-pointer flex items-center">
                  <div>
                     <svg class="w-10 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"
                        viewBox="0 0 225 225" style="enable-background:new 0 0 225 225;" xml:space="preserve">
                        <style type="text/css">
                           .st0 {
                              fill: none;
                              stroke: currentColor;
                              stroke-width: 20;
                              stroke-linecap: round;
                              stroke-miterlimit: 3;
                           }
                        </style>
                        <g transform="matrix( 1, 0, 0, 1, 0,0) ">
                           <g>
                              <path id="Layer0_0_1_STROKES" class="st0"
                                 d="M173.8,151.5l13.6-13.6 M35.4,89.9l29.1-29 M89.4,34.9v1 M137.4,187.9l-0.6-0.4     M36.6,138.7l0.2-0.2 M56.1,169.1l27.7-27.6 M63.8,111.5l74.3-74.4 M87.1,188.1L187.6,87.6 M110.8,114.5l57.8-57.8" />
                           </g>
                        </g>
                     </svg>
                  </div>
                  <div class="text-2xl text-indigo-800 ml-2 font-semibold">templatic</div>
               </div>
            </div>
         </div>
         <div>
            <div class="mt-8 opacity-75">
               <svg class="w-1/2 max-w-screen-sm mx-auto" xmlns="http://www.w3.org/2000/svg"
                  id="ffb55883-6880-4c99-84fd-4a8eccb5f463" data-name="Layer 1" viewBox="0 0 887.5 444.00977">
                  <title>faq</title>
                  <rect x="458.1306" y="29.39525" width="395.03806" height="197.51903" fill="#e6e6e6" />
                  <path
                     d="M568.96144,634.04282l9.35626-2.69673a122.56069,122.56069,0,0,0,4.24249-13.14691l-4.39393-.16027,4.79042-1.38071c1.3869-5.52747,1.95534-9.27568,1.95534-9.27568s-18.97583,5.65159-33.26621,16.68071l-1.763,12.37-1.68667-9.51114a49.58614,49.58614,0,0,0-4.39157,4.42083c-13.75738,15.817-19.74417,33.13225-13.37187,38.67479s22.69063-2.78652,36.448-18.60347a65.281,65.281,0,0,0,10.215-17.07477Z"
                     transform="translate(-156.25 -227.99512)" fill="#e6e6e6" />
                  <path
                     d="M214.48456,577.6872l-5.333-21.03429a273.13505,273.13505,0,0,0-28.97793-10.39639l-.67337,9.77549-2.73045-10.7696c-12.212-3.48717-20.51983-5.02321-20.51983-5.02321s11.222,42.67366,34.7592,75.29821l27.42605,4.81755-21.30654,3.072a110.50373,110.50373,0,0,0,9.53072,10.10012c34.24,31.78207,72.377,46.36387,85.18129,32.5693s-4.57281-50.7417-38.81285-82.52378c-10.61475-9.85276-23.94912-17.75951-37.29676-23.98229Z"
                     transform="translate(-156.25 -227.99512)" fill="#e6e6e6" />
                  <path
                     d="M265.20536,554.84444l6.30739-20.76292a273.13512,273.13512,0,0,0-19.4325-23.8785l-5.6294,8.02019,3.22943-10.63064c-8.6515-9.29757-14.96939-14.90682-14.96939-14.90682s-12.45158,42.33122-9.16631,82.42573l20.98772,18.30061-19.82728-8.3836a110.50259,110.50259,0,0,0,2.938,13.57259c12.88281,44.90561,37.9924,77.10132,56.08389,71.91112s22.31392-45.80088,9.43111-90.70649c-3.9938-13.92118-11.32161-27.58227-19.53122-39.80866Z"
                     transform="translate(-156.25 -227.99512)" fill="#e6e6e6" />
                  <polygon points="194.275 413.765 196.478 423.676 211.894 422.574 210.793 411.563 194.275 413.765"
                     fill="#ffb8b8" />
                  <polygon points="155.735 413.765 153.533 423.676 138.116 422.574 139.218 411.563 155.735 413.765"
                     fill="#ffb8b8" />
                  <circle cx="151.33025" cy="71.30647" r="20.92191" fill="#ffb8b8" />
                  <polygon points="138.116 76.812 132.611 102.139 160.139 110.948 159.038 79.015 138.116 76.812"
                     fill="#ffb8b8" />
                  <path
                     d="M304.27679,333.43735l-13.85405-10.48912s-2.66325-3.82588-3.7644-.52242S275.6468,337.842,275.6468,337.842l7.70808,90.29458,58.36113,1.10115s-22.80488-105.25891-25.71743-101.63078S305.378,331.235,304.27679,333.43735Z"
                     transform="translate(-156.25 -227.99512)" fill="#d0cde1" />
                  <path
                     d="M315.8389,320.77408s-4.40461,4.40462-2.2023,7.70808.55057,9.42916,2.75288,9.94506-2.20231,37.95511,4.40461,47.86549,3.30346,35.23691,3.30346,39.64152,6.60692,30.8323,6.60692,30.8323,22.02307,2.2023,22.02307-3.30346-7.70807-44.04614-7.70807-44.04614l6.60692-68.27151s0-6.60692-7.70808-8.80923-23.12422-7.70807-23.12422-7.70807Z"
                     transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                  <path
                     d="M347.22178,400.6077H341.716s-28.63,2.20231-26.42768-9.91038,24.22537-3.30346,24.22537-3.30346l6.60692,3.30346Z"
                     transform="translate(-156.25 -227.99512)" fill="#ffb8b8" />
                  <path
                     d="M291.29793,318.92237s-9.04421,5.70575-10.14536,7.90806-26.42768,14.315-26.42768,23.12422,7.70807,18.71961,7.70807,18.71961l9.91038,96.90149s16.5173,5.50577,17.61846,1.10116,5.50577-101.30611,3.30346-105.71073-2.20231-33.0346-2.20231-33.0346Z"
                     transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                  <path
                     d="M262.433,478.7896l-1.10115,6.60692s1.10115,22.02306,9.91038,20.92191,3.30346-23.12422,3.30346-23.12422l-1.10115-4.40461Z"
                     transform="translate(-156.25 -227.99512)" fill="#ffb8b8" />
                  <path
                     d="M275.6468,422.63077s1.10116,99.10381,6.60692,131.03726,7.70808,86.99112,7.70808,86.99112,14.315,2.2023,16.5173,3.30346,7.70807-2.20231,7.70807-2.20231l1.10116-162.9707,20.92191,73.77727s3.30346,89.19343,9.91038,91.39574,26.42768-2.20231,26.42768-2.20231-7.70807-84.78881-9.91038-88.09227-7.70807-100.205-16.5173-117.82342l-3.30346-12.11268S280.05142,425.93423,275.6468,422.63077Z"
                     transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                  <path
                     d="M353.8287,647.26607s-5.50577-4.40462-5.50577-1.10116-5.50577,23.6748,1.10115,23.6748,50.65306,3.854,49.5519-4.95519-27.59858-22.87573-27.59858-22.87573-9.84063,3.055-10.94178,4.15612S353.8287,647.26607,353.8287,647.26607Z"
                     transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
                  <path
                     d="M308.68141,647.26607s5.50576-4.40462,5.50576-1.10116,5.50577,23.6748-1.10115,23.6748-50.65306,3.854-49.5519-4.95519,27.59858-22.87573,27.59858-22.87573,9.84063,3.055,10.94179,4.15612S308.68141,647.26607,308.68141,647.26607Z"
                     transform="translate(-156.25 -227.99512)" fill="#2f2e41" />
               </svg>
            </div>
            <div>
               <div class="mx-auto text-center px-4 mt-12 text-2xl text-indigo-900 font-semibold">Frequently Asked
                  Questions</div>
               <dl class="mt-8 mx-auto max-w-screen-sm lg:max-w-screen-lg flex flex-col lg:flex-row lg:flex-wrap">
                  <div class="lg:w-1/2">
                     <div
                        class="question-and-answer select-none cursor-pointer border-2 mx-8 my-3 px-6 py-4 rounded-lg text-sm group">
                        <dt class="question">
                           <div class="flex justify-between">
                              <div class="text-indigo-800 font-semibold">
                                 Do you accept Paypal?
                              </div>
                              <div>
                                 <svg fill=currentColor
                                    class="question-chevron group-hover:bg-gray-500 h-5 block text-indigo-800 bg-gray-400 rounded-full p-1"
                                    viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="currentColor" stroke-width="1" fill=currentColor fill-rule="evenodd">
                                       <g>
                                          <polygon
                                             points="9.29289322 12.9497475 10 13.6568542 15.6568542 8 14.2426407 6.58578644 10 10.8284271 5.75735931 6.58578644 4.34314575 8">
                                          </polygon>
                                       </g>
                                    </g>
                                 </svg>
                                 <svg fill=currentColor
                                    class="question-chevron hidden group-hover:bg-gray-500 h-5 block text-indigo-800 bg-gray-400 rounded-full p-1"
                                    viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="currentColor" stroke-width="1" fill=currentColor fill-rule="evenodd">
                                       <g>
                                          <polygon
                                             points="10.7071068 7.05025253 10 6.34314575 4.34314575 12 5.75735931 13.4142136 10 9.17157288 14.2426407 13.4142136 15.6568542 12">
                                          </polygon>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                        </dt>
                        <dd class="answer hidden mt-2 leading-snug text-gray-700">
                           Yes, we do, along with AliPay, PayTM, and Payoneer.
                        </dd>
                     </div>
                  </div>
                  <div class="lg:w-1/2">
                     <div
                        class="question-and-answer select-none cursor-pointer border-2 mx-8 my-3 px-6 py-4 rounded-lg text-sm group">
                        <dt class="question">
                           <div class="flex justify-between">
                              <div class="text-indigo-800 font-semibold">
                                 What is your SLA Guarantee ?
                              </div>
                              <div>
                                 <svg fill=currentColor
                                    class="question-chevron group-hover:bg-gray-500 h-5 block text-indigo-800 bg-gray-400 rounded-full p-1"
                                    viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="currentColor" stroke-width="1" fill=currentColor fill-rule="evenodd">
                                       <g>
                                          <polygon
                                             points="9.29289322 12.9497475 10 13.6568542 15.6568542 8 14.2426407 6.58578644 10 10.8284271 5.75735931 6.58578644 4.34314575 8">
                                          </polygon>
                                       </g>
                                    </g>
                                 </svg>
                                 <svg fill=currentColor
                                    class="question-chevron hidden group-hover:bg-gray-500 h-5 block text-indigo-800 bg-gray-400 rounded-full p-1"
                                    viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="currentColor" stroke-width="1" fill=currentColor fill-rule="evenodd">
                                       <g>
                                          <polygon
                                             points="10.7071068 7.05025253 10 6.34314575 4.34314575 12 5.75735931 13.4142136 10 9.17157288 14.2426407 13.4142136 15.6568542 12">
                                          </polygon>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                        </dt>
                        <dd class="answer hidden mt-2 leading-snug text-gray-700">
                           Yes, we do, along with AliPay, PayTM, and Payoneer.
                        </dd>
                     </div>
                  </div>
                  <div class="lg:w-1/2">
                     <div
                        class="question-and-answer select-none cursor-pointer border-2 mx-8 my-3 px-6 py-4 rounded-lg text-sm group">
                        <dt class="question">
                           <div class="flex justify-between">
                              <div class="text-indigo-800 font-semibold">
                                 Are there more Faq ?
                              </div>
                              <div>
                                 <svg fill=currentColor
                                    class="question-chevron group-hover:bg-gray-500 h-5 block text-indigo-800 bg-gray-400 rounded-full p-1"
                                    viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="currentColor" stroke-width="1" fill=currentColor fill-rule="evenodd">
                                       <g>
                                          <polygon
                                             points="9.29289322 12.9497475 10 13.6568542 15.6568542 8 14.2426407 6.58578644 10 10.8284271 5.75735931 6.58578644 4.34314575 8">
                                          </polygon>
                                       </g>
                                    </g>
                                 </svg>
                                 <svg fill=currentColor
                                    class="question-chevron hidden group-hover:bg-gray-500 h-5 block text-indigo-800 bg-gray-400 rounded-full p-1"
                                    viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="currentColor" stroke-width="1" fill=currentColor fill-rule="evenodd">
                                       <g>
                                          <polygon
                                             points="10.7071068 7.05025253 10 6.34314575 4.34314575 12 5.75735931 13.4142136 10 9.17157288 14.2426407 13.4142136 15.6568542 12">
                                          </polygon>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                        </dt>
                        <dd class="answer hidden mt-2 leading-snug text-gray-700">
                           Yes, along with AliPay, PayTM, and Payoneer.
                        </dd>
                     </div>
                  </div>
                  <div class="lg:w-1/2">
                     <div
                        class="question-and-answer select-none cursor-pointer border-2 mx-8 my-3 px-6 py-4 rounded-lg text-sm group">
                        <dt class="question">
                           <div class="flex justify-between">
                              <div class="text-indigo-800 font-semibold">
                                 Is this free for commercial use ?
                              </div>
                              <div>
                                 <svg fill=currentColor
                                    class="question-chevron group-hover:bg-gray-500 h-5 block text-indigo-800 bg-gray-400 rounded-full p-1"
                                    viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="currentColor" stroke-width="1" fill=currentColor fill-rule="evenodd">
                                       <g>
                                          <polygon
                                             points="9.29289322 12.9497475 10 13.6568542 15.6568542 8 14.2426407 6.58578644 10 10.8284271 5.75735931 6.58578644 4.34314575 8">
                                          </polygon>
                                       </g>
                                    </g>
                                 </svg>
                                 <svg fill=currentColor
                                    class="question-chevron hidden group-hover:bg-gray-500 h-5 block text-indigo-800 bg-gray-400 rounded-full p-1"
                                    viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="currentColor" stroke-width="1" fill=currentColor fill-rule="evenodd">
                                       <g>
                                          <polygon
                                             points="10.7071068 7.05025253 10 6.34314575 4.34314575 12 5.75735931 13.4142136 10 9.17157288 14.2426407 13.4142136 15.6568542 12">
                                          </polygon>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                        </dt>
                        <dd class="answer hidden mt-2 leading-snug text-gray-700">
                           Yes, we do, along with AliPay, PayTM, and Payoneer.
                        </dd>
                     </div>
                  </div>
               </dl>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
         

</body>
</html>
