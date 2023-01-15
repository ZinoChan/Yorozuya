<div class="flex justify-center">
    <div x-data="{
        open: false,
        toggle() {
            if (this.open) {
                return this.close()
            }
    
            this.$refs.button.focus()
    
            this.open = true
        },
        close(focusAfter) {
            if (!this.open) return
    
            this.open = false
    
            focusAfter && focusAfter.focus()
        }
    }" x-on:keydown.escape.prevent.stop="close($refs.button)"
        x-on:focusin.window="! $refs.panel.contains($event.target) && close()" x-id="['dropdown-button']" class="relative">
        <!-- Button -->
        <button x-ref="button" x-on:click="toggle()" :aria-expanded="open" :aria-controls="$id('dropdown-button')" class="text-white text-lg">
                       
                <i class="fa-solid fa-ellipsis-vertical"></i>
        </button>

        <!-- Panel -->
        <div x-ref="panel" x-show="open" x-transition.origin.top.left x-on:click.outside="close($refs.button)"
            :id="$id('dropdown-button')" style="display: none;"
            class="absolute right-full z-50 w-40 rounded-md bg-gray-50 capitalize shadow-md">
            {{ $slot }}
        </div>
    </div>
</div>
