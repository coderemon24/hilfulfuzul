<template>
    <div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>

        <main>
            <slot />
        </main>

        <footer>
            <p>&copy; 2023 My App. All rights reserved.</p>
        </footer>
    </div>
</template>
