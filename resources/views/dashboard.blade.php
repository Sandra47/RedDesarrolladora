<x-app-layout>
    <div class="container py-5">
        <div class=" mr-6 ml-6 p-10 px-2 py-5 bg-pink-400 overflow-hidden shadow-xl sm:rounded-lg">
            <section class="text-gray-900 body-font">
                <div class="container px-5 py-10 mx-auto">
                                
                    <div class="block lg:flex lg:space-x-2  sm:px-4 px-2 py-12 mb-10">

                        <div class="w-full lg:w-2/3">

                          <livewire:show-posts>
                    

                        </div>
                    
                        <div class="w-full lg:w-1/3 px-6">
                        
                            <div class="mb-4">
                                <h5 class="font-sans text-lg uppercase bg-blue-600 px-1 mb-2 text-white"> Notificaciones Recientes </h5>
                                <ul>
                                    <li class="px-1 py-4 border-l border-white hover:border-gray-200 transition duration-300">
                                        
                                          Muy Pronto
                                      
                                    </li>
                                    <li class="px-1 py-4 border-l border-white hover:border-gray-200 transition duration-300">
                                        
                                        Muy Pronto
                                        
                                    </li>
                                    
                                </ul>
                            </div>
                    
                            <div class="py-4 px-2 rounded">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
