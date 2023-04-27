<x-layout>
   <x-slot name='title'>Home</x-slot> 
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
                <img src="{{asset('images/A._P._J._Abdul_Kalam.jpg')}}" class="img-thumbnail" width="250px" height="150px" alt="">
            </div>
            <div class="mt-5 text-white mx-5 text-justify">
                <h1 class="fw-bold st-font">Hello,</h1>
                <div class="px-4" style="line-height:2rem;">
                <p style="text-indent:100px;">I am <b class="text-warning">A._P._J._Abdul.Kalam,</b>
             in full Avul Pakir Jainulabdeen Abdul Kalam, (born October 15, 1931, Rameswaram, India—died July 27, 2015, Shillong), Indian scientist and politician who played a leading role in the development of India’s missile and nuclear weapons programs. He was president of India from 2002 to 2007. <p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{route('service')}}" class="btn btn-outline-warning mx-5 my-3">Service</a>
        </div>
    </x-slot>
</x-layout>