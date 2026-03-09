interface WhatsAppButtonProps {
    isRtl?: boolean;
    phone?: string;
}

export default function WhatsAppButton({
    isRtl = false,
    phone = "201067718255",
}: WhatsAppButtonProps) {
    return (
        <div
            className="fixed bottom-6 z-50 group"
            style={{ [isRtl ? "left" : "right"]: "1.5rem" }}
        >
            {/* Tooltip */}
            <div
                className={`absolute bottom-1/2 translate-y-1/2 ${
                    isRtl ? "left-20" : "right-20"
                } opacity-0 group-hover:opacity-100 transition-opacity duration-300`}
            >
                <div className="bg-gray-900 text-white text-sm px-3 py-2 rounded-lg shadow-lg whitespace-nowrap">
                    Chat with us on WhatsApp
                </div>
            </div>

            {/* Button */}
            <a
                href={`https://wa.me/${phone}`}
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Chat on WhatsApp"
                className="relative flex items-center justify-center w-16 h-16 rounded-full bg-[#25D366] hover:scale-110 active:scale-95 transition-all duration-300 shadow-lg"
            >
                {/* Pulse Ring */}
                <span className="absolute inline-flex h-full w-full rounded-full bg-[#25D366] opacity-75 animate-ping"></span>

                {/* Icon */}
                <svg
                    viewBox="0 0 24 24"
                    className="w-8 h-8 relative z-10"
                    fill="white"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M12.04 2C6.58 2 2.16 6.42 2.16 11.88c0 1.92.5 3.8 1.46 5.45L2 22l4.8-1.57a9.84 9.84 0 005.24 1.53c5.46 0 9.88-4.42 9.88-9.88S17.5 2 12.04 2zm0 17.9a8 8 0 01-4.27-1.23l-.31-.2-2.85.93.93-2.78-.2-.32a8 8 0 01-1.23-4.27c0-4.42 3.6-8.02 8.02-8.02 4.42 0 8.02 3.6 8.02 8.02 0 4.42-3.6 8.02-8.02 8.02zm4.38-5.93c-.24-.12-1.42-.7-1.64-.78-.22-.08-.38-.12-.54.12-.16.24-.62.78-.76.94-.14.16-.28.18-.52.06-.24-.12-1-.37-1.9-1.17-.7-.62-1.18-1.38-1.32-1.62-.14-.24-.02-.37.1-.49.1-.1.24-.26.36-.39.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.54-1.3-.74-1.78-.2-.48-.4-.42-.54-.43h-.46c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2 0 1.18.86 2.32.98 2.48.12.16 1.7 2.6 4.12 3.64.58.25 1.03.4 1.38.51.58.18 1.1.16 1.52.1.46-.07 1.42-.58 1.62-1.14.2-.56.2-1.04.14-1.14-.06-.1-.22-.16-.46-.28z" />
                </svg>
            </a>
        </div>
    );
}