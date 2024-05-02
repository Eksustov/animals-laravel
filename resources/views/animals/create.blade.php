<x-layout>
<h1>HELLO CREATE ANIMAL</h1>
    <form method="POST" action="store">
        @csrf
        <label>
            Animal:
            <input name="animal"/>
        </label>
        <label>
            Description:
            <input name="description"/>
        </label>
        <label>
            Age:
            <input name="age"/>
        </label>
        <button>Create</button>
    </form>
</x-layout>