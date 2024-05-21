@extends('user.layout.master')

@section('title')
    <title>Mediation - Safalbrain.com</title>
@endsection


@section('content')
    <div class="w-full h-[800px] lg:h-[600px] flex bg-[#0097B2] flex-col lg:flex-row justify-center items-center ">
        <div
            class=" w-full lg:w-[50%] h-screen  flex flex-col py-8 md:py-0 md:justify-center text-center items-center gap-3 ">
            <div>
                <img src="{{ asset('frontend/./src//img/yoga.png') }}" alt="" class="h-[100px] w-[100px]">
            </div>
            <div class="w-full">
                <h2 class=" text-[40px] sm:text-[48px] font-bold text-white leading-[45px] mb-3">Life Changing Course
                </h2>
                <p class=" text-[22px] sm:text-[28px] font-medium text-white px-1 leading-8">The Magic of Meditation</p>
            </div>

            <div class="bg-black py-[10px] px-[24px] rounded-xl sm:rounded-full mt-8 w-[70%] sm:max-w-fit">
                <p class=" text-white font-semibold leading-8">तन, मन, आत्मा आणि बुद्धी यांचा मेळ घालणारा ५ दिवसाचा</p>
                <p class=" text-[#D6742E] font-semibold">"सुपर मॅजिकल हॅप्पी मॉर्निंग कोर्स".</p>
            </div>

        </div>

        <div class=" w-full h-full lg:w-[40%] overflow-hidden">
            <img src="{{ asset('frontend/./src//img/yogahero.webp') }}"
                class="w-full h-[450px] lg:h-full object-contain object-center " />
        </div>

    </div>

    <!-- hero section end -->


    <!-- register section start -->
    <div class="w-full bg-[#212121] px-1">
        <div class=" flex justify-center items-center flex-col h-full gap-5">
            <button class=" text-[#D6742E] rounded-full bg-[#404040] py-[10px] px-[24px] font-semibold mt-10">"आपल्या
                मराठी माणसांसाठी आपल्या मातृभाषेत"</button>
            <p class="text-white text-center">Your life your decision निर्णय तुमचा कारण जीवन तुमचे...</p>
            <div class="bg-[#404040] rounded-[40px] w-[278px] md:w-[340px] py-[24px] px-[20px] mb-8 mt-4">
                <p class="text-white text-center font-medium text-[16px]  sm:text-[20px]">5 days workshop <br>
                    Monday to Friday<br>
                    Date 13 MAY to 17 MAY 2024
                    Morning 5:30 am to 6:30 am</p>
            </div>
            <div>
                <p class=" text-white text-[24px] font-medium text-center mb-3">offer ends in</p>
                <div class="flex gap-[5px]">
                    <div>
                        <button class="bg-white text-[#0EC727] rounded-full py-[6px] px-[9px]">02</button>
                        <p class="text-[#FFFFFF] text-[10px]">Days</p>
                    </div>
                    <div>
                        <button class="bg-white text-[#0EC727] rounded-full py-[6px] px-[9px]">04</button>
                        <p class="text-[#FFFFFF] text-[10px]">Hours</p>
                    </div>
                    <div>
                        <button class="bg-white text-[#0EC727] rounded-full py-[6px] px-[9px]">05</button>
                        <p class="text-[#FFFFFF] text-[10px]">Minutes</p>
                    </div>
                    <div>
                        <button class="bg-white text-[#0EC727] rounded-full py-[6px] px-[9px]">24</button>
                        <p class="text-[#FFFFFF] text-[10px]">Seconds</p>
                    </div>
                </div>
            </div>
            <div class=" rounded-full bg-[#046A38] py-[14px] px-[45px]">
                <p class="text-white">Register RS. 240/-only</p>
            </div>
            <p class="text-white text-[10px] md:text-[14px] text-center pb-3">सूचना : PAYMENT केल्यावर पुढील PAGE वर
                WHATSAPP GROUP नक्की JOIN करा. [
                contact - 8421107890 whatsapp only]</p>
        </div>

    </div>
    <!-- register section end-->


    <!-- law of attraction start -->

    <div class="px-5 py-[50px]">
        <div class=" text-[20px] sm:text-[25px] md:text-[30px] text-center font-semibold mb-6">
            <h2>तुम्ही सतत विचारांनी त्रस्त आहात का?</h2>
            <h2>Are you struggling with these issues?</h2>
        </div>

        <div class="flex flex-col lg:flex-row gap-5 w-[95%] sm:w-[80%] lg:w-[100%] mx-auto">
            <div class="w-full lg:w-[32%] sm:mb-0 mb-6 bg-[#e7e6e6] rounded-xl">
                <div class="rounded-xl h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center  h-full w-full"
                        src="https://dummyimage.com/1203x503">
                </div>
                <div class=" w-[75%] mx-auto my-10 font-semibold">
                    <ul>
                        <li class=" list-disc">नाते-संबंधातून सुख नाही, नात्यात कटुता आहे.</li>
                        <li class=" list-disc">LAW OF ATTRACTION करून फायदा झाला नाही.</li>
                        <li class=" list-disc">काहीच मिळत नाही, काही तरी कमतरता वाटते.</li>
                        <li class=" list-disc">मनाला शांती नाही.</li>
                        <li class=" list-disc">मोबाईल किंवा व्यसनात कित्येक तास वाया जातात.</li>
                        <li class=" list-disc">कोणाचेच वाईट केले नाही तरी एवढा त्रास का?</li>
                        <li class=" list-disc">स्वतः च्या भावना समजू शकत नाही का?</li>
                        <li class=" list-disc">एकाग्रता वाढवण्यास सक्षम नाहीत का?</li>
                        <li class=" list-disc">डोक्यातील विचार थांबतच नाहीत.</li>
                        <li class=" list-disc">नेहमी काहीतरी वाईट घडते.</li>
                        <li class=" list-disc">माझे नशीबच खराब आहे.</li>
                    </ul>
                </div>
            </div>
            <div class="w-full lg:w-[32%] sm:mb-0 mb-6 bg-[#e7e6e6] rounded-xl">
                <div class="rounded-xl h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center  h-full w-full"
                        src="https://dummyimage.com/1203x503">
                </div>
                <div class=" w-[75%] mx-auto my-10 font-semibold">
                    <ul>
                        <li class=" list-disc">नाते-संबंधातून सुख नाही, नात्यात कटुता आहे.</li>
                        <li class=" list-disc">LAW OF ATTRACTION करून फायदा झाला नाही.</li>
                        <li class=" list-disc">काहीच मिळत नाही, काही तरी कमतरता वाटते.</li>
                        <li class=" list-disc">मनाला शांती नाही.</li>
                        <li class=" list-disc">मोबाईल किंवा व्यसनात कित्येक तास वाया जातात.</li>
                        <li class=" list-disc">कोणाचेच वाईट केले नाही तरी एवढा त्रास का?</li>
                        <li class=" list-disc">स्वतः च्या भावना समजू शकत नाही का?</li>
                        <li class=" list-disc">एकाग्रता वाढवण्यास सक्षम नाहीत का?</li>
                        <li class=" list-disc">डोक्यातील विचार थांबतच नाहीत.</li>
                        <li class=" list-disc">नेहमी काहीतरी वाईट घडते.</li>
                        <li class=" list-disc">माझे नशीबच खराब आहे.</li>
                    </ul>
                </div>
            </div>
            <div class="w-full lg:w-[32%] sm:mb-0 mb-6 bg-[#e7e6e6] rounded-xl">
                <div class="rounded-xl h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center  h-full w-full"
                        src="https://dummyimage.com/1203x503">
                </div>
                <div class=" w-[75%] mx-auto my-10 font-semibold">
                    <ul>
                        <li class=" list-disc">नाते-संबंधातून सुख नाही, नात्यात कटुता आहे.</li>
                        <li class=" list-disc">LAW OF ATTRACTION करून फायदा झाला नाही.</li>
                        <li class=" list-disc">काहीच मिळत नाही, काही तरी कमतरता वाटते.</li>
                        <li class=" list-disc">मनाला शांती नाही.</li>
                        <li class=" list-disc">मोबाईल किंवा व्यसनात कित्येक तास वाया जातात.</li>
                        <li class=" list-disc">कोणाचेच वाईट केले नाही तरी एवढा त्रास का?</li>
                        <li class=" list-disc">स्वतः च्या भावना समजू शकत नाही का?</li>
                        <li class=" list-disc">एकाग्रता वाढवण्यास सक्षम नाहीत का?</li>
                        <li class=" list-disc">डोक्यातील विचार थांबतच नाहीत.</li>
                        <li class=" list-disc">नेहमी काहीतरी वाईट घडते.</li>
                        <li class=" list-disc">माझे नशीबच खराब आहे.</li>
                    </ul>
                </div>
            </div>

        </div>

        <p
            class="bg-[#C5C5C5] rounded-full text-center sm:w-[70%] md:w-[60%] lg:w-[55%] mx-auto py-[10px] px-[24px] mt-8 font-semibold text-[11px] sm:text-[14px] md:text-[16px]">
            वरील सर्व
            प्रश्नांचे तुमचे उत्तर होय असेल, तर 'सुपर मॅजिकल हॅप्पी मॉर्निंग कोर्स' तुमच्या साठी बनवला गेला आहे.</p>

    </div>
    <!-- law of attraction end -->

    <!-- timelane start -->

    <div class="bg-[#0097B2] p-4">
        <div class="flex flex-col grid-cols-9 p-2 mx-auto md:grid my-16 ml-3">
            <div class="flex md:contents flex-row-reverse">
                <div
                    class="relative top-[-50px] p-4 my-6 ml-3 text-gray-800 bg-white rounded-3xl col-start-1 col-end-5 mr-auto md:mr-0 md:ml-auto w-[178px]">

                    <p class="mt-2 leading-6 font-medium">जीवनाचे 7 आधारस्तंभ (Guided meditation मन शांत करण्यासाठी)</p>
                    <div
                        class="w-0 h-0 absolute md:left-[178px] right-[178px]  top-[40%] rotate-180 md:rotate-0
                            border-t-[10px] border-t-transparent
                            border-l-[20px] border-l-white
                            border-b-[10px] border-b-transparent">
                    </div>

                </div>

                <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                    <div class="flex items-center justify-center w-6 h-full">
                        <div class="w-1 h-full bg-indigo-300 rounded-t-full bg-gradient-to-b from-indigo-400 to-indigo-300">
                        </div>
                    </div>
                    <div
                        class="absolute w-[70px] h-[70px] -mt-3 bg-white border-4 rounded-full top-0 right-[-22px] flex justify-center items-center ">
                        <p>Day 1</p>
                    </div>
                </div>
            </div>

            <div class="flex md:contents">
                <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                    <div class="flex items-center justify-center w-6 h-full">
                        <div class="w-1 h-full bg-indigo-300"></div>
                    </div>
                    <div
                        class="absolute w-[70px] h-[70px] -mt-3 bg-white border-4 rounded-full top-0 right-[-22px] flex justify-center items-center ">
                        <p>Day 2</p>
                    </div>
                </div>
                <div
                    class="relative top-[-50px] p-4 my-6 text-gray-800 bg-white ml-3 md:ml-0 rounded-3xl col-start-6 col-end-10 mr-auto w-[178px]">
                    <p class="mt-2 leading-6 font-medium">जीवनाचे 7 आधारस्तंभ (Guided meditation मन शांत करण्यासाठी)</p>
                    <div
                        class="w-0 h-0 absolute top-[40%] left-[-20px]
                          border-t-[10px] border-t-transparent
                          border-r-[20px] border-r-white
                          border-b-[10px] border-b-transparent">
                    </div>
                </div>
            </div>

            <div class="flex md:contents flex-row-reverse">
                <div
                    class="relative top-[-50px] p-4 my-6 ml-3 text-gray-800 bg-white rounded-3xl col-start-1 col-end-5 mr-auto md:mr-0 md:ml-auto w-[178px]">
                    <p class="mt-2 leading-6 font-medium">जीवनाचे 7 आधारस्तंभ (Guided meditation मन शांत करण्यासाठी)</p>
                    <div
                        class="w-0 h-0 absolute md:left-[178px] right-[178px]  top-[40%] rotate-180 md:rotate-0
                          border-t-[10px] border-t-transparent
                          border-l-[20px] border-l-white
                          border-b-[10px] border-b-transparent">
                    </div>

                </div>
                <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                    <div class="flex items-center justify-center w-6 h-full">
                        <div
                            class="w-1 h-full bg-indigo-300 rounded-t-full bg-gradient-to-b from-indigo-400 to-indigo-300">
                        </div>
                    </div>
                    <div
                        class="absolute w-[70px] h-[70px] -mt-3 bg-white border-4 rounded-full top-0 right-[-22px] flex justify-center items-center ">
                        <p>Day 3</p>

                    </div>
                </div>
            </div>

            <div class="flex md:contents">
                <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                    <div class="flex items-center justify-center w-6 h-full">
                        <div class="w-1 h-full bg-indigo-300"></div>
                    </div>
                    <div
                        class="absolute w-[70px] h-[70px] -mt-3 bg-white border-4 rounded-full top-0 right-[-22px] flex justify-center items-center ">
                        <p>Day 4</p>
                    </div>
                </div>
                <div
                    class="relative top-[-50px] p-4 my-6 ml-3 text-gray-800 bg-white rounded-3xl col-start-6 col-end-10 mr-auto w-[178px]">
                    <p class="mt-2 leading-6 font-medium">जीवनाचे 7 आधारस्तंभ (Guided meditation मन शांत करण्यासाठी)</p>
                    <div
                        class="w-0 h-0 absolute top-[40%]  left-[-20px]
                          border-t-[10px] border-t-transparent
                          border-r-[20px] border-r-white
                          border-b-[10px] border-b-transparent">
                    </div>
                </div>
            </div>

            <div class="flex md:contents flex-row-reverse">
                <div
                    class="relative top-[-50px] p-4 my-6 ml-3 text-gray-800 bg-white rounded-3xl col-start-1 col-end-5 mr-auto md:mr-0 md:ml-auto w-[178px]">
                    <p class="mt-2 leading-6 font-medium">जीवनाचे 7 आधारस्तंभ (Guided meditation मन शांत करण्यासाठी)</p>
                    <div
                        class="w-0 h-0 absolute md:left-[178px] right-[178px]  top-[40%] rotate-180 md:rotate-0
                           border-t-[10px] border-t-transparent
                           border-l-[20px] border-l-white
                           border-b-[10px] border-b-transparent">
                    </div>

                </div>
                <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                    <div class="flex items-center justify-center w-6 h-full">
                        <div
                            class=" w-0 h-full bg-indigo-300 rounded-t-full bg-gradient-to-b from-indigo-400 to-indigo-300">
                        </div>
                    </div>
                    <div
                        class="absolute w-[70px] h-[70px] -mt-3 bg-white border-4 rounded-full top-0 right-[-22px] flex justify-center items-center ">
                        <p>Day 5</p>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- timelane end -->

    <!-- yoga start -->
    <div>

        <!-- yoga upper part -->

        <div class=" bg-[#212121] py-8">
            <div class=" rounded-full bg-[#404040] py-[10px] px-[20px] w-[200px] mx-auto text-center ">
                <p class="text-[#D6742E] font-semibold">ब्रह्म मुहूर्त कशासाठी?</p>
            </div>

            <div class=" flex justify-around w-[80%] xl:w-[60%] mx-auto mt-4 gap-5 flex-col md:flex-row items-center">
                <div class="w-[300px]">
                    <p class=" text-white text-center ">तुम्हीं जे कराल त्याचे 10X परिणाम तुम्हाला मिळतात.
                        (You get 10X effects of whatever you do)
                        सभोवताली सकारात्मक ऊर्जा असते.(Positive Energy is all around)</p>
                </div>
                <div class="w-[300px]">
                    <p class=" text-white text-center">आपले शरीर आपल्या मनाशी सुसंगत असते.(Body is aligned with mind)
                        आपले सुप्त मन सक्रिय असते.(Subconscious mind is active)</p>
                </div>
            </div>
        </div>


        <!-- yoga mid part -->

        <section class="text-gray-600 body-font overflow-hidden">
            <h2 class="font-semibold text-[25px] md:text-[30px] text-center my-4">या ५ दिवसात आपण काय प्राप्त कराल?</h2>
            <div class="container px-5 py-3 md:py-10 mx-auto">
                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <div class="lg:w-1/2 w-full">
                        <img alt="yoga" class=" object-cover object-center rounded"
                            src="{{ asset('frontend/./src//img/yogaimg.png') }}">
                    </div>

                    <!-- lg:w-1/2 w-full lg:h-auto h-64 -->

                    <div class="lg:w-1/2 w-[95%] sm:w-[80%] mx-auto lg:pl-10 lg:py-6 mt-6 lg:mt-0 ">

                        <ul class=" font-semibold leading-8">
                            <li class=" list-disc">तुम्ही तुमचे मन शांत करू शकाल.</li>
                            <li class=" list-disc"> तुमची Productivity वाढेल.</li>
                            <li class=" list-disc"> आत्मविश्वास वाढेल..</li>
                            <li class=" list-disc"> तुम्ही नेहमी आनंदी राहाल.
                            </li>
                            <li class=" list-disc"> तुम्ही एक तणावरहित व्हाल.
                            </li>
                            <li class=" list-disc"> रोगमुक्त आयुष्य जगाल.
                            </li>
                            <li class=" list-disc"> तुमची इच्छा लवकर पूर्ण होईल.</li>
                            <li class=" list-disc"> सकारात्मक परिवर्तनाचा अनुभव घ्याल.
                            </li>
                            <li class=" list-disc"> तुम्ही कल्पना केली आहे, तसे जगाल.</li>
                            <li class=" list-disc"> नकारात्मक भावनांवर नियंत्रण येईल..</li>
                        </ul>
                    </div>

                </div>
            </div>
    </div>
    </section>
    <!-- yoga bottom part -->

    <div class=" bg-[#212121] py-8 px-2">
        <div class=" rounded-full bg-[#404040] py-[10px] px-[20px]  md:w-[50%] xl:w-[38%] mx-auto text-center ">
            <p class="text-[#D6742E] font-semibold text-[14px] md:text-[16px]">''ब्रह्म मुहूर्तावर आपल्याला आयुष्यात
                अशक्य वाटणाऱ्या सर्व गोष्टी शक्य करा.''</p>
        </div>

        <div class=" flex justify-around w-[80%] xl:w-[60%] mx-auto mt-4 gap-5 flex-col md:flex-row items-center">
            <div class="w-[300px] ">
                <p class=" text-white text-center ">तुम्हीं जे कराल त्याचे 10X परिणाम तुम्हाला मिळतात.
                    (You get 10X effects of whatever you do)
                    सभोवताली सकारात्मक ऊर्जा असते.(Positive Energy is all around)</p>
            </div>
            <div class="w-[300px]">
                <p class=" text-white text-center">आपले शरीर आपल्या मनाशी सुसंगत असते.(Body is aligned with mind)
                    आपले सुप्त मन सक्रिय असते.(Subconscious mind is active)</p>
            </div>
        </div>
    </div>
    </div>
    <!-- yoga end -->

    <!-- focus card section start -->

    <div class="px-5 py-[50px]">
        <div class=" rounded-full  bg-[#e7e6e6] py-[10px] px-[20px]  md:w-[50%] xl:w-[38%] mx-auto text-center mb-[50px]">
            <p class="text-[#D6742E] font-semibold text-[14px] md:text-[16px]">''ब्रह्म मुहूर्तावर आपल्याला आयुष्यात
                अशक्य वाटणाऱ्या सर्व गोष्टी शक्य करा.''</p>
        </div>
        <div class="flex flex-wrap justify-around gap-5 lg:w-[70%] xl:w-[60%] mx-auto">
            <div class=" md:w-[45%] sm:mb-0 mb-6 bg-[#e7e6e6] rounded-xl">
                <div class="rounded-xl h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center  h-full w-full"
                        src="https://dummyimage.com/1203x503">
                </div>
                <div class=" w-[90%] ml-5 my-5">
                    <ul>
                        <li class=" ">#Focus</li>
                        <li class="leading-7 ">🔶तुमच्या सर्वात आंतरिक इच्छा, आतील सर्व इच्छा बद्दल
                            १००% स्पष्टता मिळवा आणि त्यासाठी काम करा.</li>
                        <li>[Get 100% clarity about all your desires and
                            work towards them.]</li>
                        <li class=" leading-7 ">🔶तुमच्या जीवनावर पुर्ण ताबा मिळवा. </li>
                        <li>[Take full control of your life.]</li>
                        <li class="leading-7">🔶तुम्ही तुमची आवृत्त्ती २.० बनवण्यास तयार व्हा.</li>
                        <li> [You should be ready to make your
                            version 2.0.]</li>

                    </ul>
                </div>
            </div>
            <div class=" md:w-[45%] sm:mb-0 mb-6 bg-[#e7e6e6] rounded-xl">
                <div class="rounded-xl h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center  h-full w-full"
                        src="https://dummyimage.com/1203x503">
                </div>
                <div class=" w-[90%] ml-5 my-5">
                    <ul>
                        <li class=" ">#Belief</li>
                        <li class="leading-7 ">🔶जीवनात एक गतिमान आणि शिस्तबद्ध व्यक्ती बना जो
                            कोणतेही कार्य सहजतेने पुर्ण करु शकतो.
                        </li>
                        <li>[Become a dynamic and disciplined person in life
                            who can complete any task with ease.]</li>
                        <li class=" leading-7 ">🔶तुमचे इच्छित आरोग्य, संपत्ती, करिअर आणि नातेसंबंधांची
                            उद्दिष्टे न चुकता साध्य करा.</li>
                        <li>[Achieve your desired health, wealth, career and
                            relationship goals without fail.]</li>


                    </ul>
                </div>
            </div>

        </div>


    </div>
    <!-- focus card section end -->

    <!-- free bonus start -->


    <div class="px-5 py-[50px] bg-[#212121] text-white">
        <div class="text-[30px] text-center font-semibold mb-6">
            <h2>Free Bonus</h2>
        </div>

        <div class="flex gap-5 flex-col lg:flex-row w-[90%] md:w-[80%] mx-auto">

            @php
                $bonuses = App\Models\Bonus::get();
            @endphp

            @foreach ($bonuses as $bonus)
            <div class=" w-full lg:w-[32%] sm:mb-0 mb-6 bg-[#404040] rounded-xl">
                <div class="rounded-xl h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center  h-full w-full"
                        src="{{ asset($bonus->img) }}">
                </div>
                <div class="my-3 ml-3">
                    <h2 class=" text-[24px] font-semibold">{{$bonus->title  }}</h2>
                    <p class=" text-[14px]">{{$bonus->description  }}</p>
                </div>
            </div>
            @endforeach



        </div>



    </div>

    <!-- free bonus end -->


    <!-- participants section start -->

    <section class="my-5">
        <h2 class="text-[25px] sm:text-[34px] text-center mb-5 font-bold px-1">What do our participants say</h2>
        <div class="w-[80%] mx-auto flex flex-col lg:flex-row gap-5">
            <div class="w-full lg:w-[45%] bg-[#e7e6e6] h-[300px] rounded-3xl relative">
                <i class="fa-solid fa-circle-play absolute top-[43%] left-[43%] text-[50px] cursor-pointer"
                    onclick="playVideo(1)"></i>
                <video id="video1" class="w-[100%] h-[300px] rounded-3xl" controls>
                    <source src="./src/img/3327752-hd_1920_1080_24fps.mp4">
                </video>
            </div>
            <div class="w-full lg:w-[45%] bg-[#e7e6e6] h-[300px] rounded-3xl relative">
                <i class="fa-solid fa-circle-play absolute top-[43%] left-[43%] text-[50px] cursor-pointer"
                    onclick="playVideo(2)"></i>
                <video id="video2" class="w-[100%] h-[300px] rounded-3xl" controls>
                    <source src="./src/img/3327752-hd_1920_1080_24fps.mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- participants section end -->


    <!-- avatar testimonial section start -->
    <section id="Testimonials">
        <div class="mx-auto  px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">


            <div class="mt-8 flex gap-4 lg:mt-0">
                <button aria-label="Previous slide" id="keen-slider-previous"
                    class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <button aria-label="Next slide" id="keen-slider-next"
                    class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                    <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>

            <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
                <div id="keen-slider" class="keen-slider">
                    <div class="keen-slider__slide rounded-md">
                        <div class="flex justify-center items-center flex-col">
                            <img class="inline-block flex-shrink-0 size-[62px] rounded-full"
                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                alt="Image Description">
                            <div class="ms-3">
                                <h3 class="font-semibold text-gray-800 dark:text-white">Mark Wanner</h3>
                                <p class="text-sm font-medium text-gray-400 dark:text-neutral-500">mark@gmail.com</p>
                            </div>
                            <div class="w-[400px] h-[250px] bg-[#e7e6e6] rounded-2xl mt-3"></div>

                        </div>
                    </div>

                    <div class="keen-slider__slide rounded-md">
                        <div class="flex justify-center items-center flex-col">
                            <img class="inline-block flex-shrink-0 size-[62px] rounded-full"
                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                alt="Image Description">
                            <div class="ms-3">
                                <h3 class="font-semibold text-gray-800 dark:text-white">Mark Wanner</h3>
                                <p class="text-sm font-medium text-gray-400 dark:text-neutral-500">mark@gmail.com</p>
                            </div>
                            <div class="w-[400px] h-[250px] bg-[#e7e6e6] rounded-2xl mt-3"></div>

                        </div>
                    </div>

                    <div class="keen-slider__slide rounded-md">
                        <div class="flex justify-center items-center flex-col">
                            <img class="inline-block flex-shrink-0 size-[62px] rounded-full"
                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                alt="Image Description">
                            <div class="ms-3">
                                <h3 class="font-semibold text-gray-800 dark:text-white">Mark Wanner</h3>
                                <p class="text-sm font-medium text-gray-400 dark:text-neutral-500">mark@gmail.com</p>
                            </div>
                            <div class="w-[400px] h-[250px] bg-[#e7e6e6] rounded-2xl mt-3"></div>

                        </div>
                    </div>

                    <div class="keen-slider__slide rounded-md">
                        <div class="flex justify-center items-center flex-col">
                            <img class="inline-block flex-shrink-0 size-[62px] rounded-full"
                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                alt="Image Description">
                            <div class="ms-3">
                                <h3 class="font-semibold text-gray-800 dark:text-white">Mark Wanner</h3>
                                <p class="text-sm font-medium text-gray-400 dark:text-neutral-500">mark@gmail.com</p>
                            </div>
                            <div class="w-[400px] h-[250px] bg-[#e7e6e6] rounded-2xl mt-3"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- avatar testimonial section end -->

    <!-- mentor box start -->

    <section class="bg-[#0097B2] py-16 text-white">

        <div class="flex gap-5 w-[80%] mx-auto flex-col md:flex-row">
            <div class=" w-[100%] md:w-[35%] h-[300px] bg-[#e7e6e6] rounded-3xl"></div>
            <div class=" w-[100%] md:w-[60%] xl:w-[45%]">
                <h2 class=" font-semibold text-[26px] mb-2">Meet our mentor</h2>
                <p>Mr. RAGHUNATH THORAT </br> I am the founder of 'THE MAGIC OF MEDITATION' I am on a mission to help 10
                    Lakh people to make a difference in their Health, Relationship, Career, Money. with the help of
                    </br>SUPER MAGICAL HAPPY MORNING COURSE</p>
                <p class="mt-4">आपले विचारच आपली अंतिम स्थिती घडवत असतात.सुपर मॅजिकल हॅप्पी मॉर्निंग प्रॅक्टिसेसच्या
                    सहाय्याने पद्धतशीरपणे आरोग्य,नातेसंबंध,करिअर आणि पैसा यामध्ये आमूलाग्र बदल मी स्वतः अनुभवलेला आहे
                    आणि इतरांना सुद्धा त्यामध्ये मदत केलेली आहे.सखोल माहिती साठी आत्ताच रजिस्टर करा.</p>
            </div>
        </div>

    </section>
    <!-- mentor box start -->


    <!-- workshop session start -->

    <div class="w-full bg-[#212121] px-1">
        <div class=" flex justify-center items-center flex-col h-full gap-5">
            <button class=" text-[#D6742E] rounded-full bg-[#404040] py-[10px] px-[24px] font-semibold mt-10">"आपल्या
                मराठी माणसांसाठी आपल्या मातृभाषेत"</button>
            <p class="text-white text-center">Your life your decision निर्णय तुमचा कारण जीवन तुमचे...</p>
            <div class="bg-[#404040] rounded-[40px] w-[278px] md:w-[340px] py-[24px] px-[20px] mb-8 mt-4">
                <p class="text-white text-center font-medium text-[16px]  sm:text-[20px]">5 days workshop <br>
                    Monday to Friday<br>
                    Date 13 MAY to 17 MAY 2024
                    Morning 5:30 am to 6:30 am</p>
            </div>
            <div>
                <p class=" text-white text-[24px] font-medium text-center mb-3">offer ends in</p>
                <div class="flex gap-[5px]">
                    <div>
                        <button class="bg-white text-[#0EC727] rounded-full py-[6px] px-[9px]">02</button>
                        <p class="text-[#FFFFFF] text-[10px]">Days</p>
                    </div>
                    <div>
                        <button class="bg-white text-[#0EC727] rounded-full py-[6px] px-[9px]">04</button>
                        <p class="text-[#FFFFFF] text-[10px]">Hours</p>
                    </div>
                    <div>
                        <button class="bg-white text-[#0EC727] rounded-full py-[6px] px-[9px]">05</button>
                        <p class="text-[#FFFFFF] text-[10px]">Minutes</p>
                    </div>
                    <div>
                        <button class="bg-white text-[#0EC727] rounded-full py-[6px] px-[9px]">24</button>
                        <p class="text-[#FFFFFF] text-[10px]">Seconds</p>
                    </div>
                </div>
            </div>
            <div class=" rounded-full bg-[#046A38] py-[14px] px-[45px]">
                <p class="text-white">Register RS. 240/-only</p>
            </div>
            <p class="text-white text-[10px] md:text-[14px] text-center pb-3">सूचना : PAYMENT केल्यावर पुढील PAGE वर
                WHATSAPP GROUP नक्की JOIN करा. [
                contact - +91 7384820014 ]</p>
        </div>

    </div>

    <!-- workshop session start -->
@endsection
