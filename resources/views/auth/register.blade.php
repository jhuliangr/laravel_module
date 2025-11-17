<x-site-layout>
    <x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-breeze.input-label for="name" value="Name" />
                <x-breeze.text-input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('name')" required autofocus autocomplete="name" />
                <x-breeze.input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-breeze.input-label for="email" value="Email" />
                <x-breeze.text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autocomplete="username" />
                <x-breeze.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-breeze.input-label for="password" value="Password" />

                <x-breeze.text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-breeze.input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-breeze.input-label for="password_confirmation" value="Confirm Password" />

                <x-breeze.text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-breeze.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center gap-2 mt-4">
                <input type="checkbox" id="showLevelCheckbox" />
                Are you a teacher?
            </div>
            <div id="levelField" class="hidden">
                <x-breeze.input-label for="level" value="Level" />
                <x-breeze.text-input id="level" class="block mt-1 w-full" type="text" name="level"
                    :value="old('level')" autocomplete="level" />
                <x-breeze.input-error :messages="$errors->get('level')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    Already registered?
                </a>

                <x-breeze.primary-button class="ms-4">
                    Register
                </x-breeze.primary-button>
            </div>
        </form>
    </x-guest-layout>
    <script>
        document.getElementById('showLevelCheckbox').addEventListener('change', function() {
            const levelField = document.getElementById('levelField');
            if (this.checked) {
                levelField.style.display = 'block';
            } else {
                levelField.style.display = 'none';
                // Opcional: limpiar el campo cuando se oculta
                document.getElementById('level').value = '';
            }
        });

        // Mostrar el campo si ya estaba marcado al cargar la página
        <?php if (isset($_POST['show_level']) && $_POST['show_level']): ?>
        document.getElementById('showLevelCheckbox').checked = true;
        document.getElementById('levelField').style.display = 'block';
        <?php endif; ?>
    </script>
</x-site-layout>
