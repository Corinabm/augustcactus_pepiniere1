<div id="announcement-bar" class="announcement-bar" role="banner" aria-label="Barre d'annonce">
    <div class="announcement-bar-container">
        <!-- Icône et Message -->
        <div class="announcement-content">
            <svg class="announcement-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
            </svg>
            <span class="announcement-message">{{ $annonce->message_complet }}</span>
        </div>
    </div>
</div>

<style>
/* Barre d'annonce - Design minimaliste et épuré avec sticky header */
.announcement-bar {
    position: sticky;
    top: 0;
    width: 100%;
    background: #1A4B2E;
    z-index: 50;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.announcement-bar-container {
    padding: 0.5rem 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 36px;
}

/* Conteneur icône + message */
.announcement-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.4rem;
    width: 100%;
    max-width: 1200px;
}

/* Icône */
.announcement-icon {
    width: 1rem;
    height: 1rem;
    color: white;
    flex-shrink: 0;
}

/* Message */
.announcement-message {
    color: white;
    font-size: 0.85rem;
    line-height: 1.3;
    text-align: center;
    font-weight: 500;
    letter-spacing: 0.01em;
}

/* Responsive - Tablette */
@media (min-width: 640px) {
    .announcement-bar-container {
        padding: 0.5rem 2rem;
        height: 36px;
    }
    .announcement-content {
        gap: 0.5rem;
    }
    .announcement-icon {
        width: 1.125rem;
        height: 1.125rem;
    }
    .announcement-message {
        font-size: 0.9rem;
    }
}

/* Responsive - Desktop */
@media (min-width: 1024px) {
    .announcement-bar-container {
        padding: 0.5rem 2.5rem;
        height: 36px;
    }
    .announcement-content {
        gap: 0.5rem;
    }
    .announcement-icon {
        width: 1.125rem;
        height: 1.125rem;
    }
    .announcement-message {
        font-size: 0.95rem;
    }
}

</style>