package vn.vngame.utils;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;

public class FileUtils {

    public static void copyFile(File sourceFile, File destFile)
            throws IOException {
        InputStream in = null;
        OutputStream out = null;
        try {
            in = new FileInputStream(sourceFile);
            out = new FileOutputStream(destFile);

            byte[] buf = new byte[1024];
            int len;
            while ((len = in.read(buf)) > 0) {
                out.write(buf, 0, len);
            }
        } finally {
            if (in != null) {
                in.close();
            }
            if (out != null) {
                out.close();
            }
        }
    }

    public static void copyDirectory(File sourceLocation, File targetLocation)
            throws IOException {
        if (sourceLocation.isDirectory()) {
            if (!targetLocation.exists()) {
                targetLocation.mkdir();
            }

            String[] children = sourceLocation.list();
            for (String children1 : children) {
                copyDirectory(new File(sourceLocation, children1),
                        new File(targetLocation, children1));
            }
        } else {
            OutputStream out;
            try (InputStream in = new FileInputStream(sourceLocation)) {
                out = new FileOutputStream(targetLocation);
                byte[] buf = new byte[1024];
                int len;
                while ((len = in.read(buf)) > 0) {
                    out.write(buf, 0, len);
                }
            }
            out.close();
        }
    }

    public static void deleteDirectory(File directory) {
        if (directory.isDirectory()) {
            File[] files = directory.listFiles();
            if (files != null) {
                for (File file : files) {
                    if (file.isDirectory()) {
                        deleteDirectory(file);
                    } else {
                        System.out.println("deleting: " + file.getName());
                        file.delete();
                    }
                }
            }
            directory.delete();
        } else {
            directory.delete();
        }
    }

    public static void deleteFileOrDirectory(File sourcePath) {
        if (sourcePath.isDirectory()) {
            deleteDirectory(sourcePath);
        } else {
            sourcePath.delete();
        }
    }
}
