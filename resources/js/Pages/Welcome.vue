<template>
    <div id="wrapper" class="divided">

        <!-- One -->
        <section class="md:min-h-screen flex flex-col md:flex-row">
            <div class="flex justify-center items-center flex-col content-center w-full md:w-1/2">
                <div class="text-left px-16 py-16 md:px-32">
                    <h1 class="text-8xl font-serif font-thin mb-8">Lars Wiegers</h1>
                    <p class="text-4xl font-thin font-serif leading-10">Zeer gepassioneerde programmeur die studeert bij
                        Saxion in Deventer.</p>
                    <ul class="py-24">
                        <li>
                            <inertia-link :href="route('posts.index')"
                                          class="rounded-3xl py-6 px-32 border border-gray-300 font-bold uppercase">blog
                            </inertia-link>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block md:min-h-screen md:w-1/2 w-full">
                <img src="https://larswiegers.nl/images/home-images/banner.jpg"
                     class="w-full h-full object-cover"
                     alt="Person coding"/>
            </div>
        </section>

        <!-- Two -->
        <section class="flex flex-col md:flex-row border border-gray-300">
            <div class=" w-full md:w-2/6">
                <img src="https://larswiegers.nl/images/home-images/lars.jpg"
                     class="object-cover"
                     alt="Person coding" style="height: 700px; width: 100%;"/>
            </div>
            <div class="flex justify-center items-center flex-col content-center w-full md:w-4/6">
                <div class="text-left px-16 md:px-32 py-16">
                    <h2 class="text-6xl font-serif font-thin mb-8">Wie ben ik?</h2>
                    <p class="text-2xl font-thin font-serif leading-7">Ik ben een beginnend applicatieontwikkelaar in
                        Apeldoorn die zich vooral richt op het de hele web development stack. Ik ben op dit moment bezig
                        mij verder te ontwikkelen op dit gebied door een hbo opleiding te doen. Tijdens mijn vorige
                        opleiding heb ik de mogelijkheid gekregen om mijn school te vertegenwoordigen op de Nederlandse
                        wedstrijden van het mbo. Bij deze wedstrijden ben ik <b>4e van Nederland</b> geworden.</p>
                </div>
            </div>
        </section>

        <!-- Three -->
        <section class="flex flex-col md:flex-row border border-gray-300">
            <div class="flex justify-center items-center flex-col content-center  w-full md:w-3/6">
                <div class="text-left px-16 md:px-32 py-8">
                    <h2 class="text-6xl font-serif font-thin mb-8">Mijn werk</h2>
                    <p class="text-2xl font-thin font-serif leading-7">Het grootste gedeelte van mijn software projecten
                        zijn te vinden op mijn
                        <a href="https://github.com/LarsWiegers">github</a>. Daarnaast ben ik ook nog actief op
                        <a class="underline" href="https://linkedin.com/in/larswiegers">linkedin</a>.
                        Daarnaast kunt u mij ook nog mailen als u in contact wil komen : <a class="underline"
                                                                                            href="mailto:larswiegers@live.nl">larswiegers@live.nl</a>
                    </p>
                </div>
            </div>
            <div class="w-full md:w-3/6">
                <img src="https://larswiegers.nl/images/home-images/pic03.png"
                     class="object-cover"
                     alt="Person coding" style="height: 700px; width: 100%;"/>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <div class="py-24">
                <ul class="flex flex-col md:flex-row justify-center items-center">
                    <li class="mx-4 my-2 text-2xl">
                        <a href="https://twitter.com/LarsWiegers" class="underline">
                            <span class="label">Twitter</span>
                        </a>
                    </li>
                    <li class="mx-4 my-2 text-2xl">
                        <a href="https://linkedin.com/in/larswiegers" class="underline">
                            <span class="label">LinkedIn</span>
                        </a>
                    </li>
                    <li class="mx-4 my-2 text-2xl">
                        <a href="mailto:larswiegers@live.nl" class="underline">
                            <span class="label">Email</span>
                        </a>
                    </li>
                </ul>
                <p class="text-center my-16 text-1xl">&copy; Lars Wiegers 2021</p>
            </div>
        </footer>

    </div>
</template>
<script>
    export default {}
</script>
