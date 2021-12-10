<?php
include 'header.php';
?>
     <button class="bg-primary-600  p-3 z-30 rounded-r-xl text-white shadow-md top-2/4 fixed md:hidden"
     :class="sidebar ? 'pl-1 pr-2': ''"
    x-on:click="sidebar = ! sidebar">
    <div x-show="!sidebar">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
        </svg>
    </div>
    <div x-show="sidebar">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
    </div>
</button>
    <div class="lg:py-24 bg-white pt-16" >

        <div class="container-fluid wide">
            <div class="flex">
                <div class="p-10 z-10 w-full bg-white flex-shrink-0 flex-col fixed h-screen overflow-auto md:flex left-0 top-0 md:relative md:w-60 md:p-0"
                    x-show="sidebar"
                    x-transition:enter="transition duration-200 transform ease-out"
                    x-transition:enter-start="-translate-x-full"
                    x-transition:leave="transition duration-100 transform ease-in"
                    x-transition:leave-end="-translate-x-full">
                    <div class="flex justify-start items-center">
                    <div class="bg-primary-600 text-white rounded w-8 h-8 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div class="ml-2 font-semibold text-base text-body-400">Learn</div>
                </div>
                    <div class="space-y-2 flex mt-10 flex-col">
                        <div class="text-sm font-semibold flex px-3 py-2">GETTING STARTED</div>
                        <a class="flex text-primary-600 bg-primary-100 py-2 px-3 rounded-md text-sm font-semibold" href="">Up and Running with OCaml</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">A First Hour with OCaml</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">OCaml Programming Guidelines</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Compiling OCaml Projects</a>
                    </div>
                    <div class="space-y-2 flex mt-10 flex-col">
                        <div class="text-sm font-semibold flex px-3 py-2">LANGUAGE FEATURES</div>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Data Types and Matching</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Lists</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Functional Programming</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">If Statements, Loops and Recursions</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Modules</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Labels</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Pointers</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Null Pointers, Asserts and Warnings</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Functors</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Objects</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Comparison of Standard Containers</a>
                    </div>
                    <div class="space-y-2 flex mt-10 flex-col">
                        <div class="text-sm font-semibold flex px-3 py-2">Error and debugging</div>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Error Handling</a>
                        <a href="" class="font-semibold text-sm text-body-400 hover:bg-gray-100 block py-2 px-3">Common Error Messages</a>
                    </div>


                </div>
                <div class="flex-1 flex overflow-hidden">
                    <div class="prose prose-orange overflow-hidden z-0 z- lg:max-w-4xl mx-auto relative py-8 px-6">
                                <h2>Up and Running with OCaml</h2>
                                <p>Help you install OCaml, the Dune build system, and support for your favourite text editor or IDE.
                        </p>
                                <p>This page will help you install OCaml, the Dune build system, and support for
                        your favourite text editor or IDE. These instructions work on Windows, Unix
                        systems like Linux, and macOS.</p>
                        <h2 id="installing-ocaml">Installing OCaml</h2>
                        <p>There are two procedures: one for Unix-like systems, and one for Windows.</p>
                        <h3 id="for-linux-and-macos">For Linux and macOS</h3>
                        <p>We will install OCaml using opam, the OCaml package manager.  We will also use
                        opam when we wish to install third-party OCaml libraries.</p>
                        <p ><strong>For macOS</strong></p>
                        <pre class="overflow-auto w-full"><code># Homebrew
brew install opam

# MacPort
port install opam
                        </code></pre>
                        <p><strong>For Linux</strong> the preferred way is to use your system's package manager on
                        Linux (e.g <code>apt-get install opam</code> or similar). <a class="hover:underline" href="https://opam.ocaml.org/doc/Install.html">Details of all installation
                        methods.</a></p>
                        <p>Then, we install an OCaml compiler:</p>
                        <pre class="overflow-auto w-full"><code># environment setup
                        opam init
                        eval `opam env`

                        # install given version of the compiler
                        opam switch create 4.11.1
                        eval `opam env`
                        </code></pre>
                        <p>Now, OCaml is up and running:</p>
                        <pre class="overflow-auto w-full"><code>$ which ocaml
                        /Users/frank/.opam/4.11.1/bin/ocaml

                        $ ocaml -version
                        The OCaml toplevel, version 4.11.1
                        </code></pre>
                        <p><strong>For either Linux or macOS</strong> as an alternative, a binary distribution of opam is
                        available:</p>
                        <pre class="overflow-auto w-full"><code>sh &lt;(curl -sL https://raw.githubusercontent.com/ocaml/opam/master/shell/install.sh)
                        </code></pre>
                        <h3 id="for-windows">For Windows</h3>
                        <p>We use the <a class="hover:underline"  href="https://fdopen.github.io/opam-repository-mingw/">OCaml for Windows</a>
                        installer which comes in 32bit and 64bit versions. This installer gives you
                        opam and OCaml installations all in one go. It is used from within a Cygwin
                        environment, but the executables produced have no dependency on Cygwin at all.</p>
                        <h2 id="the-ocaml-top-level">The OCaml top level</h2>
                        <p>OCaml comes with two compilers: for native code, and for byte code. We shall
                        use one of those in a moment. But first, let's use OCaml's top level (sometimes
                        known as a REPL in other languages):</p>
                        <pre class="overflow-auto w-full"><code>$ ocaml
                                OCaml version 4.11.1

                        # 1 + 2 * 3;;
                        - : int = 7

                        </code></pre>
                        <p>We typed the phrase <code>1 + 2 * 3</code> and then signalled to OCaml that we had
                        finished by typing <code>;;</code> followed by the Enter key. OCaml calculated the
                        result, <code>7</code> and its type <code>int</code> and showed them to us. We exit by running the
                        built-in <code>exit</code> function with exit code 0:</p>
                        <pre class="overflow-auto w-full"><code>$ ocaml
                                OCaml version 4.11.1

                        # 1 + 2 * 3;;
                        - : int = 7
                        # exit 0;;
                        $
                        </code></pre>
                        <p>There are two ways to improve your experience with the OCaml top level: you can
                        install the popular <a href="https://github.com/hanslub42/rlwrap"><code>rlwrap</code></a> on your
                        system and invoke <code>rlwrap ocaml</code> instead of <code>ocaml</code> to get line-editing
                        facilities inside the OCaml top level, or you can install the alternative top
                        level <code>utop</code> using opam:</p>
                        <pre class="overflow-auto w-full"><code>$ opam install utop
                        </code></pre>
                        <p>We run it by typing <code>utop</code> instead of <code>ocaml</code>. You can read more about
                        <a class="hover:underline"  href="https://github.com/ocaml-community/utop">utop</a>.</p>
                        <h2 id="installing-the-dune-build-system">Installing the Dune build system</h2>
                        <p>Dune is a build system for OCaml. It takes care of all the low level details of
                        OCaml compilation. We install it with opam:</p>
                        <pre class="overflow-auto w-full"><code>$ opam install dune
                        The following actions will be performed:
                        - install dune 2.7.1

                        &lt;&gt;&lt;&gt; Gathering sources &gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;
                        [default] https://opam.ocaml.org/2.0.7/archives/dune.2.7.1+opam.tar.gz
                        downloaded

                        &lt;&gt;&lt;&gt; Processing actions &lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;
                        -&gt; installed dune.2.7.1
                        Done.
                        </code></pre>
                        <h2 id="a-first-project">A first project</h2>
                        <p>Let's begin the simplest project with Dune and OCaml. We create a new directory
                        and ask <code>dune</code> to initialise a new project:</p>
                        <pre class="overflow-auto w-full"><code>$ mkdir helloworld
                        $ cd helloworld/
                        $ dune init exe helloworld
                        Success: initialized executable component named helloworld
                        </code></pre>
                        <p>Building our program is as simple as typing <code>dune build</code>:</p>
                        <pre class="overflow-auto w-full"><code>$ dune build
                        Info: Creating file dune-project with this contents:
                        | (lang dune 2.7)
                        Done: 8/11 (jobs: 1)
                        </code></pre>
                        <p>When we change our program, we type <code>dune build</code> again to make a new
                        executable. We can run the executable with <code>dune exec</code> (it's called
                        <code>helloworld.exe</code> even when we're not using Windows):</p>
                        <pre class="overflow-auto w-full"><code>$ dune exec ./helloworld.exe
                        Hello, World!
                        </code></pre>
                        <p>Let's look at the contents of our new directory. Dune has added the
                        <code>helloworld.ml</code> file, which is our OCaml program. It has also added our <code>dune</code>
                        file, which tells dune how to build the program, and a <code>_build</code> subdirectory,
                        which is dune's working space.</p>
                        <pre class="overflow-auto w-full"><code>$ ls
                        _build		dune		helloworld.ml
                        </code></pre>
                        <p>The <code>helloworld.exe</code> executable is stored inside the <code>_build/default</code> subdirectory, so
                        it's easier to run with <code>dune exec</code>. To ship the executable, we can just copy
                        it from inside <code>_build/default</code> to somewhere else.</p>
                        <p>Here is the contents of the automatically-generated <code>dune</code> file. When we want
                        to add components to your project, such as third-party libraries, we edit this
                        file.</p>
                        <pre class="overflow-auto w-full"><code>(executable
                        (name helloworld))
                        </code></pre>
                        <h2 id="editor-support-for-ocaml">Editor support for OCaml</h2>
                        <p>For <strong>Visual Studio Code</strong>, and other editors support the Language Server
                        Protocol, the OCaml language server can be installed with opam:</p>
                        <pre class="overflow-auto w-full"><code>$ opam install ocaml-lsp-server
                        </code></pre>
                        <p>Now, we install the OCaml Platform Visual Studio Code extension from the Visual
                        Studio Marketplace.</p>
                        <p>Upon first loading an OCaml source file, you may be prompted to select the
                        toolchain in use: pick OCaml the version of OCaml you are using, e.g. 4.11.1
                        from the list. Now, help is available by hovering over symbols in your program:</p>
                        <p><strong>On Windows</strong>, we must launch Visual Studio Code from within the Cygwin window,
                        rather than by clicking on its icon (otherwise, the language server will not be
                        found):</p>
                        <pre class="overflow-auto w-full"><code>$ /cygdrive/c/Users/Frank\\ Smith/AppData/Local/Programs/Microsoft\\ VS\\ Code/Code.exe
                        </code></pre>
                        <p><strong>For Vim and Emacs</strong>, install the <a class="hover:underline"  href="https://github.com/ocaml/merlin">Merlin</a>
                        system using opam:</p>
                        <pre class="overflow-auto w-full"><code>$ opam install merlin
                        </code></pre>
                        <p>The installation procedure will print instructions on how to link Merlin with
                        your editor.</p>
                        <p><strong>On Windows</strong>, when using Vim, the default cygwin Vim will not work with
                        Merlin. You will need install Vim separately. In addition to the usual
                        instructions printed when installing Merlin, you may need to set the PATH in
                        Vim:</p>
                        <pre class="overflow-auto w-full"><code>let $PATH .= ";".substitute(system('opam config var bin'),'\\n$','','''')
                        </code></pre>
                    </div>
                </div>
                <div class=" hidden lg:flex">
                    <div class="flex-col w-60">
                        <div class="h-auto border border-gray-200 rounded-xl p-6 right-sidebar">
                            <div class="font-semibold text-black text-sm mb-4">ON THIS PAGE</div>
                            <a href="" class="font-semibold text-body-600 text-sm mb-4 block">Up and running with OCaml</a>
                            <a href="" class="font-semibold text-body-400 text-sm mb-4 block">Installing OCaml</a>
                            <a href="" class="font-semibold text-body-400 text-sm mb-4 block ml-4">For Linux and macOS</a>
                            <a href="" class="font-semibold text-body-400 text-sm block ml-8">For macOS</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>