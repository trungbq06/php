package vn.vngame.utils;

public class EncryptUtils {

    public static String encrypt(String source, String key) {
        StringBuilder output = new StringBuilder();
        int key_length = key.length();
        int source_length = source.length();
        char[] sourceCharArray = source.toCharArray();
        char[] keyCharArray = key.toCharArray();

        for (int i = 0; i < key_length; i++) {
            output.delete(0, output.length());
            for (int j = 0; j < source_length; j++) {
                char encryptChar = (char) (sourceCharArray[j] ^ keyCharArray[i]);
                output.append(encryptChar);
            }
            source = output.toString();
            sourceCharArray = source.toCharArray();
        }
        return output.toString();
    }

    public static String decrypt(String encryptedString, String key) {
        StringBuilder output = new StringBuilder();
        int key_length = key.length();
        int encrypted_string_length = encryptedString.length();
        char[] encryptedCharArray = encryptedString.toCharArray();
        char[] keyCharArray = key.toCharArray();

        for (int i = key_length - 1; i >= 0; i--) {
            output.delete(0, output.length());
            for (int j = 0; j < encrypted_string_length; j++) {
                char decryptChar = (char) (encryptedCharArray[j] ^ keyCharArray[i]);
                output.append(decryptChar);
            }
            encryptedString = output.toString();
            encryptedCharArray = encryptedString.toCharArray();
        }
        return output.toString();
    }
}
