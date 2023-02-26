from google.cloud import speech_v1
from google.cloud.speech_v1 import enums

def transcribe_audio(audio_data):
    client = speech_v1.SpeechClient()

    # Configure the audio settings
    config = {
        "language_code": "en-US",
        "audio_channel_count": 2,
        "enable_word_time_offsets": True,
        "model": "default",
    }
    audio = {"content": audio_data}

    # Call the API to transcribe the audio data
    response = client.recognize(config=config, audio=audio)

    # Parse the response to get the transcribed text
    transcribed_text = ""
    for result in response.results:
        alternative = result.alternatives[0]
        transcribed_text += alternative.transcript

    return transcribed_text
